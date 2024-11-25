<div class="card shadow-sm h-100">
  <div class="card-body ">
    <h2 class="h4">
      @if (config('app.site_type') === 'erp')
        Sale by category
      @elseif (config('app.site_type') === 'ecs')
        Revenue by category
      @endif
    </h2>
    <div class="bg-white">
      <canvas id="chartSaleByCategory"></canvas>
    </div>
  </div>
  <script>
      const ctxSaleByCategory = document.getElementById('chartSaleByCategory').getContext('2d');
      const chartSaleByCategory = new Chart(ctxSaleByCategory, {
          type: 'line',
          data: {
              labels: [
                  @foreach ($saleByCategory as $category)
                    '{{ $category["productCategory"]->name }}',
                  @endforeach
              ],
              datasets: [{
                  label: '# Total Sales',
                  data: [
                      @foreach ($saleByCategory as $category)
                        {{ $category["quantity"] }},
                      @endforeach
                  ],
                  backgroundColor: [
                      '#288745',
                      '#288745',
                      '#288745',
                      '#288745',
                      '#288745',
                      '#288745',
                      '#288745',
                  ],
                  borderColor: [
                      '#288745',
                      '#288745',
                      '#288745',
                      '#288745',
                      '#288745',
                      '#288745',
                      '#288745',
                  ],
                  borderWidth: 1
              }]
          },
          options: {
              {{--
              scales: {
                  y: {
                      beginAtZero: true
                  }
              }
              --}}
          }
      });
  </script>
</div>
