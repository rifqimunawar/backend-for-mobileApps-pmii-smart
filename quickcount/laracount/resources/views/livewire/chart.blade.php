<div class="card">
  <div class="card-body">
      {{-- <h5 class="card-title">Pie Chart</h5> --}}

      <!-- Pie Chart -->
      <div id="pieChart"></div>

      <script>
          document.addEventListener("DOMContentLoaded", () => {
              new ApexCharts(document.querySelector("#pieChart"), {
                  series: [{{ $totalSuaraSatu }}, {{ $totalSuaraDua }}, {{ $totalSuaraTiga }},],
                  chart: {
                      height: 370,
                      type: 'pie',
                      toolbar: {
                          show: true
                      }
                  },
                  labels: ['Anis Imin', 'Prabowo Gibran', 'Ganjar Mahfud']
              }).render();
          });
      </script>
      <!-- End Pie Chart -->

  </div>  
</div>
