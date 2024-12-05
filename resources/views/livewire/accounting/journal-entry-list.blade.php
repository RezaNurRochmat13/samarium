<div>

  {{-- Date picker --}}
  <div class="my-3 px-3 text-secondary">

    <input type="date" wire:model="startDate" class="mr-3" />
    <input type="date" wire:model="endDate" class="mr-3" />

  </div>


  {{-- Journal entry table --}}
  <div class="table-responsive bg-white">
    <table class="table table-sm table-bordered table-striped-rm mb-0">
      <thead>
        <tr class="bg-success text-white">
          <th>Date</th>
          <th>Particulars</th>
          <th>LF</th>
          <th>Debit</th>
          <th>Credit</th>
        </tr>
      </thead>

      <tbody>
        @foreach ($journalEntries as $journalEntry)
          @php
            $previousJEI = null;
          @endphp
          @foreach ($journalEntry->journalEntryItems as $journalEntryItem)
            <tr>
              <td>
                @if ($previousJEI == null || $previousJEI->journalEntry->journal_entry_id != $journalEntryItem->journalEntry->journal_entry_id)
                  {{ $journalEntry->date }}
                @endif
                @php
                  $needToShow = false;
                @endphp
              </td>

              <td>
                @if ($journalEntryItem->type == 'credit')
                  To
                @endif
                {{ $journalEntryItem->abAccount->name }} A/c
              </td>

              <td>
              </td>

              <td>
                @if ($journalEntryItem->type == 'debit')
                  Rs
                  @php echo number_format( $journalEntryItem->amount ); @endphp
                @endif
              </td>

              <td>
                @if ($journalEntryItem->type == 'credit')
                  Rs
                  @php echo number_format( $journalEntryItem->amount ); @endphp
                @endif
              </td>
            </tr>
            @php
              $previousJEI = $journalEntryItem;
            @endphp
          @endforeach
        @endforeach
      </tbody>

      <tfoot>
      </tfoot>
    </table>
  </div>
</div>
