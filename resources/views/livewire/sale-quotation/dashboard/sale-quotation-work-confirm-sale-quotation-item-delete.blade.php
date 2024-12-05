<div style="width: 1000px !important;">
      <div class="modal enter" tabindex="-1" role="dialog" data-backdrop="static" id="saleQuotationItemDeleteConfirmModal">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">
                <i class="fas fa-exclamation-triangle text-danger mr-2"></i>
                  Remove item?
              </h5>
            </div>
      
            <div class="modal-body p-0">
              <div class="p-3">
                <div class="row text-muted">
                  <div class="col">
                    <strong>
                      &nbsp;
                    </strong>
                    <br />
                    <img src="{{ asset('storage/' . $deletingSaleQuotationItem->product->image_path) }}" class="mr-3" style="width: 100px; height: 100px;">
                  </div>
                  <div class="col">
                    <div class="d-flex justify-content-center h-100 text-secondary">
                      <div class="d-flex justify-content-center align-self-center">
                        <h3 class="h5 font-weight-bold p-3">
                          {{ $deletingSaleQuotationItem->product->name }}
                        </h3>
                      </div>
                    </div>
                  </div>
                  <div class="col">
                    <div class="d-flex justify-content-center h-100 text-danger">
                      <div class="d-flex justify-content-center align-self-center">
                        <h3 class="h5 font-weight-bold p-3">
                          Rs
                          @php echo number_format( $deletingSaleQuotationItem->getTotalAmount() ); @endphp
                        </h3>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="mx-2 ml-3 mt-3 mb-3">
                <button wire:click="$dispatch('removeItemFromSaleQuotation', {{ $deletingSaleQuotationItem->sale_quotation_item_id }})"
                    class="btn btn-sm btn-danger mr-3 p-2"
                    data-dismiss="modal">
                  Remove
                </button>
                <button wire:click="$dispatch('exitDeleteSaleQuotationItem')"
                    class="btn btn-sm btn-secondary mr-3 p-2"
                    data-dismiss="modal">
                  Cancel
                </button>
              </div>
      
            </div>
          </div>
        </div>
      </div>
      
      <script>
          /* Show the modal on load */
          $(document).ready(function () {
             $('#saleQuotationItemDeleteConfirmModal').modal('show');
          });
      </script>
</div>
