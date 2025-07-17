<!doctype html>
<html lang="en">
<!--begin::Head-->

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>AdminLTE | Dashboard v2</title>

  <!--begin::Accessibility Meta Tags-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes" />
  <meta name="color-scheme" content="light dark" />
  <meta name="theme-color" content="#007bff" media="(prefers-color-scheme: light)" />
  <meta name="theme-color" content="#1a1a1a" media="(prefers-color-scheme: dark)" />

  <!--end::Accessibility Meta Tags-->
  <!--begin::Primary Meta Tags-->
  <meta name="title" content="AdminLTE " />
  <meta name="author" content="ColorlibHQ" />
  <meta name="description" content="" />
  <meta name="keywords" content="" />
  <!--end::Primary Meta Tags-->
  <!--begin::Accessibility Features-->
  <!-- Skip links will be dynamically added by accessibility.js -->
  <meta name="supported-color-schemes" content="light dark" />
  <link rel="preload" href="<?= base_url("adminlte/assets/css/adminlte.css") ?>" as="style" />
  <!--end::Accessibility Features-->
  <!--begin::Fonts-->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fontsource/source-sans-3@5.0.12/index.css"
    integrity="sha256-tXJfXfp6Ewt1ilPzLDtQnJV4hclT9XuaZUKyUvmyr+Q=" crossorigin="anonymous" media="print"
    onload="this.media='all'" />
  <!--end::Fonts-->
  <!--begin::Third Party Plugin(OverlayScrollbars)-->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.11.0/styles/overlayscrollbars.min.css"
    crossorigin="anonymous" />
  <!--end::Third Party Plugin(OverlayScrollbars)-->
  <!--begin::Third Party Plugin(Bootstrap Icons)-->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css"
    crossorigin="anonymous" />
  <!--end::Third Party Plugin(Bootstrap Icons)-->
  <!--begin::Required Plugin(AdminLTE)-->
  <link rel="stylesheet" href="<?= base_url("adminlte/assets/css/adminlte.css") ?>" />
  <!--end::Required Plugin(AdminLTE)-->
  <!-- apexcharts -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/apexcharts@3.37.1/dist/apexcharts.css"
    integrity="sha256-4MX+61mt9NVvvuPjUWdUdyfZfxSB1/Rf9WtqRHgG5S0=" crossorigin="anonymous" />

  <!-- Toastr CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
  <!-- DataTables CSS -->
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">

  <!-- SweetAlert2 CSS & JS -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body class="layout-fixed sidebar-expand-lg sidebar-open bg-body-tertiary">
  <!--begin::App Wrapper-->
  <div class="app-wrapper">
    <!--begin::Header-->
    <?= view('admin/partials/topbar'); ?>
    <!--end::Header-->
    <!--begin::Sidebar-->
    <?= view('admin/partials/sidebar'); ?>
    <!--end::Sidebar-->
    <!--begin::App Main-->
    <main class="app-main">


      <!--begin::App Content Header-->
      <div class="app-content-header">
        <!--begin::Container-->
        <div class="container-fluid">
          <!--begin::Row-->
          <?= view('admin/partials/title_breadcrumb') ?>
          <!--end::Row-->
        </div>
        <!--end::Container-->
      </div>


      <div class="app-content">
        <!--begin::Container-->

        <?= $this->renderSection('content'); ?>

        <!--end::Container-->
      </div>
      <!--end::App Content-->
    </main>
    <!--end::App Main-->
    <!--begin::Footer-->
    <?= view('admin/partials/footer'); ?>
    <!--end::Footer-->
  </div>
  <!--end::App Wrapper-->
  <!--begin::Script-->
  <!-- jQuery (required for toastr) -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.11.0/browser/overlayscrollbars.browser.es6.min.js"
    crossorigin="anonymous"></script>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.min.js" crossorigin="anonymous"></script>

  <!-- Toastr JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

  <!-- DataTables JS -->
  <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>

  <script src="<?= base_url('adminlte/assets/js/adminlte.js') ?>"></script>

  <script>
  const SELECTOR_SIDEBAR_WRAPPER = '.sidebar-wrapper';
  const Default = {
    scrollbarTheme: 'os-theme-light',
    scrollbarAutoHide: 'leave',
    scrollbarClickScroll: true,
  };
  document.addEventListener('DOMContentLoaded', function() {
    const sidebarWrapper = document.querySelector(SELECTOR_SIDEBAR_WRAPPER);
    if (sidebarWrapper && OverlayScrollbarsGlobal?.OverlayScrollbars !== undefined) {
      OverlayScrollbarsGlobal.OverlayScrollbars(sidebarWrapper, {
        scrollbars: {
          theme: Default.scrollbarTheme,
          autoHide: Default.scrollbarAutoHide,
          clickScroll: Default.scrollbarClickScroll,
        },
      });
    }
  });
  </script>
  <!--end::OverlayScrollbars Configure-->
  <!-- Image path runtime fix -->
  <script>
  document.addEventListener('DOMContentLoaded', () => {
    // Find the link tag for the main AdminLTE CSS file.
    const cssLink = document.querySelector('link[href*="css/adminlte.css"]');
    if (!cssLink) {
      return; // Exit if the link isn't found
    }

    // Extract the base path from the CSS href.
    // e.g., from "../css/adminlte.css", we get "../"
    // e.g., from "./css/adminlte.css", we get "./"
    const cssHref = cssLink.getAttribute('href');
    const deploymentPath = cssHref.slice(0, cssHref.indexOf('css/adminlte.css'));

    // Find all images with absolute paths and fix them.
    document.querySelectorAll('img[src^="/assets/"]').forEach((img) => {
      const originalSrc = img.getAttribute('src');
      if (originalSrc) {
        const relativeSrc = originalSrc.slice(1); // Remove leading '/'
        img.src = deploymentPath + relativeSrc;
      }
    });
  });
  </script>
  <!-- OPTIONAL SCRIPTS -->
  <!-- apexcharts -->
  <script src="https://cdn.jsdelivr.net/npm/apexcharts@3.37.1/dist/apexcharts.min.js"
    integrity="sha256-+vh8GkaU7C9/wbSLIcwq82tQ2wTf44aOHA8HlBMwRI8=" crossorigin="anonymous"></script>
  <script>
  // NOTICE!! DO NOT USE ANY OF THIS JAVASCRIPT
  // IT'S ALL JUST JUNK FOR DEMO
  // ++++++++++++++++++++++++++++++++++++++++++

  /* apexcharts
   * -------
   * Here we will create a few charts using apexcharts
   */

  //-----------------------
  // - MONTHLY SALES CHART -
  //-----------------------

  const sales_chart_options = {
    series: [{
        name: 'Digital Goods',
        data: [28, 48, 40, 19, 86, 27, 90],
      },
      {
        name: 'Electronics',
        data: [65, 59, 80, 81, 56, 55, 40],
      },
    ],
    chart: {
      height: 180,
      type: 'area',
      toolbar: {
        show: false,
      },
    },
    legend: {
      show: false,
    },
    colors: ['#0d6efd', '#20c997'],
    dataLabels: {
      enabled: false,
    },
    stroke: {
      curve: 'smooth',
    },
    xaxis: {
      type: 'datetime',
      categories: [
        '2023-01-01',
        '2023-02-01',
        '2023-03-01',
        '2023-04-01',
        '2023-05-01',
        '2023-06-01',
        '2023-07-01',
      ],
    },
    tooltip: {
      x: {
        format: 'MMMM yyyy',
      },
    },
  };

  const sales_chart = new ApexCharts(
    document.querySelector('#sales-chart'),
    sales_chart_options,
  );
  sales_chart.render();

  //---------------------------
  // - END MONTHLY SALES CHART -
  //---------------------------

  function createSparklineChart(selector, data) {
    const options = {
      series: [{
        data
      }],
      chart: {
        type: 'line',
        width: 150,
        height: 30,
        sparkline: {
          enabled: true,
        },
      },
      colors: ['var(--bs-primary)'],
      stroke: {
        width: 2,
      },
      tooltip: {
        fixed: {
          enabled: false,
        },
        x: {
          show: false,
        },
        y: {
          title: {
            formatter() {
              return '';
            },
          },
        },
        marker: {
          show: false,
        },
      },
    };

    const chart = new ApexCharts(document.querySelector(selector), options);
    chart.render();
  }

  const table_sparkline_1_data = [25, 66, 41, 89, 63, 25, 44, 12, 36, 9, 54];
  const table_sparkline_2_data = [12, 56, 21, 39, 73, 45, 64, 52, 36, 59, 44];
  const table_sparkline_3_data = [15, 46, 21, 59, 33, 15, 34, 42, 56, 19, 64];
  const table_sparkline_4_data = [30, 56, 31, 69, 43, 35, 24, 32, 46, 29, 64];
  const table_sparkline_5_data = [20, 76, 51, 79, 53, 35, 54, 22, 36, 49, 64];
  const table_sparkline_6_data = [5, 36, 11, 69, 23, 15, 14, 42, 26, 19, 44];
  const table_sparkline_7_data = [12, 56, 21, 39, 73, 45, 64, 52, 36, 59, 74];

  createSparklineChart('#table-sparkline-1', table_sparkline_1_data);
  createSparklineChart('#table-sparkline-2', table_sparkline_2_data);
  createSparklineChart('#table-sparkline-3', table_sparkline_3_data);
  createSparklineChart('#table-sparkline-4', table_sparkline_4_data);
  createSparklineChart('#table-sparkline-5', table_sparkline_5_data);
  createSparklineChart('#table-sparkline-6', table_sparkline_6_data);
  createSparklineChart('#table-sparkline-7', table_sparkline_7_data);

  //-------------
  // - PIE CHART -
  //-------------

  const pie_chart_options = {
    series: [700, 500, 400, 600, 300, 100],
    chart: {
      type: 'donut',
    },
    labels: ['Chrome', 'Edge', 'FireFox', 'Safari', 'Opera', 'IE'],
    dataLabels: {
      enabled: false,
    },
    colors: ['#0d6efd', '#20c997', '#ffc107', '#d63384', '#6f42c1', '#adb5bd'],
  };

  const pie_chart = new ApexCharts(document.querySelector('#pie-chart'), pie_chart_options);
  pie_chart.render();

  //-----------------
  // - END PIE CHART -
  //-----------------

  <?php if (session()->has('error')): ?>
  toastr.error("<?= session('error') ?>");
  <?php endif; ?>
  <?php if (session()->has('success')): ?>
  toastr.success("<?= session('success') ?>");
  <?php endif; ?>
  toastr.options = {
    "closeButton": true,
    "progressBar": true,
    "positionClass": "toast-top-right", // or "toast-top-right"
    "timeOut": "4000"
  };
  </script>

  <?= $this->renderSection('scripts') ?>
  <!--end::Script-->
</body>
<!--end::Body-->

</html>