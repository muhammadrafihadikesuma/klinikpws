  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
      <div class="copyright">
          <strong><span> &copy; 2022 PT. PINANG WITMAS SEJATI </span></strong> </>. All Rights Reserved.
      </div>
      <div class="credits">
          Develop by <a href="https://github.com/muhammadrafihadikesuma">
              Muhammad Rafi Hadi Kesuma
          </a>
      </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- SCRIPT DATE -->
  <script src="../assets/js/jquery.min.js"></script>
  <script src="../assets/js/popper.js"></script>
  <script src="../assets/js/bootstrap.min.js"></script>
  <script src="../assets/js/moment-with-locales.min.js"></script>
  <script src="../assets/js/bootstrap-datetimepicker.min.js"></script>
  <script src="../assets/js/main.js"></script>


  <!-- Vendor JS Files -->
  <script src="../assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/chart.js/chart.min.js"></script>
  <script src="../assets/vendor/echarts/echarts.min.js"></script>
  <script src="../assets/vendor/quill/quill.min.js"></script>
  <script src="../assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="../assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="../assets/vendor/php-email-form/validate.js"></script>
  <!-- Scripts Select2 -->
  <script src="../assets/js/jquery.slim.min.js"></script>
  <script src="../assets/js/select2.full.min.js"></script>
  <!-- DATATABLES -->
  <script src="../assets/js/jquery.dataTables.min.js"></script>
  <script src="../assets/js/dataTables.bootstrap5.min.js"></script>
  <script src="../assets/js/dataTables.buttons.min.js"></script>
  <script src="../assets/js/buttons.bootstrap5.min.js"></script>
  <script src="../assets/js/buttons.html5.min.js"></script>
  <script src="../assets/js/jszip.min.js"></script>
  <script src="../assets/js/pdfmake.min.js"></script>
  <script src="../assets/js/vfs_fonts.js"></script>
  <script src="../assets/js/buttons.print.min.js"></script>
  <script src="../assets/js/buttons.colVis.min.js"></script>
  <script src="../assets/js/bootstrap-datetimepicker.min.js"></script>
  <script src="../assets/js/moment-with-locales.min.js"></script>

  <!-- Template Main JS File -->
  <script src="../assets/js/main.js"></script>
  <!-- Script DataTables -->
  <script>
      $(document).ready(function() {
          var table = $('#dataTable').DataTable({
              // lengthChange: false,

              buttons: [
                  'copy',
                  'excel',
                  'print',
                  {
                      extend: 'pdfHtml5',
                      orientation: 'landscape',
                      pageSize: 'LEGAL',
                      download: 'open',

                  },
                  'colvis'

              ],

              dom: "<'row'<'col-md-3'l><'col-md-5'B><'col-md-4'f>>" +
                  "<'row'<'col-md-12'tr>>" +
                  "<'row'<'col-md-5'i><'col-md-7'p>>",
              lengthMenu: [
                  [10, 25, 50, 100, -1],
                  [10, 25, 50, 100, "All"]
              ]
          });

          table.buttons().container()
              .appendTo('#dataTable_wrapper .col-md-5:eq(0)');
      });
  </script>

  <!-- SELECT 2 -->
  <script>
      $(document).ready(function() {
          $("#floatingJabatan").select2({
              placeholder: "Select a state",
              allowClear: true,
              width: 'resolve'

          });

      });
  </script>


  <!-- SCRIPT DATE TIME -->
  <script type="text/javascript">
      $(function() {
          $('#tanggalbeli').datetimepicker({
              language: 'en',
              pick12HourFormat: false,
              format: 'mm/dd/yyyy hh:ii:ss'
          });
      });
  </script>


  <script>
      function my1() {
          var a = document.getElementById("1");
          a.value = a.value.toUpperCase();
      }
  </script>

  <script>
      function my2() {
          var a = document.getElementById("2");
          a.value = a.value.toLowerCase();
      }
  </script>

  <script>
      function my3() {
          var a = document.getElementById("3");
          a.value = a.value.toLowerCase();
      }
  </script>

  <script>
      function my4() {
          var a = document.getElementById("4");
          a.value = a.value.toLowerCase();
      }
  </script>

  <script>
      function my5() {
          var a = document.getElementById("5");
          a.value = a.value.toLowerCase();
      }
  </script>

  <script>
      function my6() {
          var a = document.getElementById("6");
          a.value = a.value.toLowerCase();
      }
  </script>

  <!-- Processor -->
  <script>
      function my7() {
          var a = document.getElementById("7");
          a.value = a.value.toLowerCase();
      }
  </script>

  <!-- RAM -->
  <script>
      function my8() {
          var a = document.getElementById("8");
          a.value = a.value.toLowerCase();
      }
  </script>

  <!-- Harddisk -->
  <script>
      function my9() {
          var a = document.getElementById("9");
          a.value = a.value.toLowerCase();
      }
  </script>

  <!-- Cassing -->
  <script>
      function my10() {
          var a = document.getElementById("10");
          a.value = a.value.toLowerCase();
      }
  </script>

  <!-- Windows Edition -->
  <script>
      function my11() {
          var a = document.getElementById("11");
          a.value = a.value.toLowerCase();
      }
  </script>

  <!-- Windows Version -->
  <script>
      function my12() {
          var a = document.getElementById("12");
          a.value = a.value.toLowerCase();
      }
  </script>

  <!-- Licenses PC -->
  <script>
      function my13() {
          var a = document.getElementById("13");
          a.value = a.value.toLowerCase();
      }
  </script>

  <!-- Office -->
  <script>
      function my14() {
          var a = document.getElementById("14");
          a.value = a.value.toLowerCase();
      }
  </script>

  <!-- Licenses Office -->
  <script>
      function my15() {
          var a = document.getElementById("15");
          a.value = a.value.toLowerCase();
      }
  </script>

  <!-- Spesifikasi Lainnya -->
  <script>
      function my16() {
          var a = document.getElementById("16");
          a.value = a.value.toLowerCase();
      }
  </script>

  <!-- Status -->
  <script>
      function my17() {
          var a = document.getElementById("17");
          a.value = a.value.toLowerCase();
      }
  </script>

  <!-- Age -->
  <script>
      function my18() {
          var a = document.getElementById("18");
          a.value = a.value.toLowerCase();
      }
  </script>

  <!-- UPS -->
  <script>
      function my19() {
          var a = document.getElementById("19");
          a.value = a.value.toLowerCase();
      }
  </script>

  <!-- Printer -->
  <script>
      function my20() {
          var a = document.getElementById("20");
          a.value = a.value.toLowerCase();
      }
  </script>
  </body>

  </html>