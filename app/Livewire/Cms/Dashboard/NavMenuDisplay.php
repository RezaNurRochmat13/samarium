<?php

namespace App\Livewire\Cms\Dashboard;

use Livewire\Component;
use Illuminate\View\View;
use App\CmsNavMenuItem;

class NavMenuDisplay extends Component
{
    public $cmsNavMenu;

    public $editingDropdown;

    public $modes = [
        'createNavMenuItem' =>false,
        'createNavMenuDropdownItem' =>false,
    ];

    protected $listeners = [
        'cmsNavMenuItemAdded',
        'exitCreateCmsNavMenuItemMode',
        'cmsNavMenuDropdownItemAdded' => 'exitCreateCmsNavMenuDropdownItemMode',
        'exitCreateCmsNavMenuDropdownItemMode',
    ];

    public function render(): View
    {
        return view('livewire.cms.dashboard.nav-menu-display');
    }

    /* Clear modes */
    public function clearModes()
    {
        foreach ($this->modes as $key => $val) {
            $this->modes[$key] = false;
        }
    }

    /* Enter and exit mode */
    public function enterMode($modeName)
    {
        $this->clearModes();

        $this->modes[$modeName] = true;
    }

    public function exitMode($modeName)
    {
        $this->modes[$modeName] = false;
    }

    public function cmsNavMenuItemAdded(): void
    {
        $this->exitMode('createNavMenuItem');
    }

    public function exitCreateCmsNavMenuItemMode(): void
    {
        $this->exitMode('createNavMenuItem');
    }

    public function moveUp(CmsNavMenuItem $cmsNavMenuItem): void
    {
        /* Skip for first item */
        if ($cmsNavMenuItem->order == 1) {
            return;
        }

        $beforeItem = $this->getBeforeItem($cmsNavMenuItem);

        $temp = $beforeItem->order;
        $beforeItem->order = $cmsNavMenuItem->order;
        $cmsNavMenuItem->order = $temp;

        $beforeItem->save();
        $cmsNavMenuItem->save();

        $this->render();
    }

    public function moveDown(CmsNavMenuItem $cmsNavMenuItem): void
    {
        /* Skip for last item */
        if ($cmsNavMenuItem->order == $cmsNavMenuItem->cmsNavMenu->cmsNavMenuItems()->orderBy('order', 'desc')->first()->order) {
            return;
        }

        $nextItem = $this->getNextItem($cmsNavMenuItem);

        $temp = $nextItem->order;
        $nextItem->order = $cmsNavMenuItem->order;
        $cmsNavMenuItem->order = $temp;

        $nextItem->save();
        $cmsNavMenuItem->save();

        $this->render();
    }

    public function getBeforeItem(CmsNavMenuItem $cmsNavMenuItem): CmsNavMenuItem
    {
        $beforeItem = $cmsNavMenuItem->cmsNavMenu
            ->cmsNavMenuItems()->where('order', '<', $cmsNavMenuItem->order)
            ->orderBy('order', 'desc')
            ->first();

        return $beforeItem;
    }

    public function getNextItem(CmsNavMenuItem $cmsNavMenuItem): CmsNavMenuItem
    {
        $nextItem = $cmsNavMenuItem->cmsNavMenu
            ->cmsNavMenuItems()->where('order', '>', $cmsNavMenuItem->order)
            ->orderBy('order', 'asc')
            ->first();

        return $nextItem;
    }

    public function exitCreateCmsNavMenuDropdownItemMode(): void
    {
        $this->editingDropdown = null;
        $this->exitMode('createNavMenuDropdownItem');
    }

    public function editDropdown(CmsNavMenuItem $cmsNavMenuItem): void
    {
        $this->editingDropdown = $cmsNavMenuItem;
        $this->enterMode('createNavMenuDropdownItem');
    }

    public function deleteCmsNavMenuItem(CmsNavMenuItem $cmsNavMenuItem): void
    {
        if ($cmsNavMenuItem->type == 'dropdown') {
            foreach ($cmsNavMenuItem->cmsNavMenuDropdownItems as $item) {
                $item->delete();
            }
        }

        $cmsNavMenuItem->delete();

        $this->render();
    }
}
