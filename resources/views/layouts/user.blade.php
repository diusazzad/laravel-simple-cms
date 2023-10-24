<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="//unpkg.com/alpinejs" defer></script>
    @vite('resources/css/app.css')

</head>

<body x-data="{ page: 'ecommerce', 'loaded': true, 'darkMode': true, 'stickyMenu': false, 'sidebarToggle': false, 'scrollTop': false }"
x-init="
       darkMode = JSON.parse(localStorage.getItem('darkMode'));
       $watch('darkMode', value => localStorage.setItem('darkMode', JSON.stringify(value)))"
:class="{'dark text-bodydark bg-boxdark-2': darkMode === true}">
    <x-user.dashboard.preloader/>

    <div class="flex h-screen overflow-hidden">
        <!-- ===== Sidebar Start ===== -->
        <x-user.dashboard.sidebar/>
        <!-- ===== Sidebar End ===== -->

        <!-- ===== Content Area Start ===== -->
        <div class="relative flex flex-col flex-1 overflow-x-hidden overflow-y-auto">
          <!-- ===== Header Start ===== -->
          <x-user.dashboard.header/>
          <!-- ===== Header End ===== -->

          <!-- ===== Main Content Start ===== -->
          <main>
            <div class="p-4 mx-auto max-w-screen-2xl md:p-6 2xl:p-10">
              <div class="grid grid-cols-1 gap-4 md:grid-cols-2 md:gap-6 xl:grid-cols-4 2xl:gap-7.5">
                <!-- Card Item Start -->

                <x-user.dashboard.card/>


                <!-- Card Item End -->
              </div>

              <div class="mt-4 grid grid-cols-12 gap-4 md:mt-6 md:gap-6 2xl:mt-7.5 2xl:gap-7.5">
                <!-- ====== Chart One Start -->
                {{-- <include src="./partials/chart-01.html" /> --}}
                <x-user.dashboard.chartA/>
                <!-- ====== Chart One End -->

                <!-- ====== Chart Two Start -->
                {{-- <include src="./partials/chart-02.html" /> --}}
                <x-user.dashboard.chartB/>
                <!-- ====== Chart Two End -->

                <!-- ====== Chart Three Start -->
                {{-- <include src="./partials/chart-03.html" /> --}}
                <x-user.dashboard.chartC/>
                <!-- ====== Chart Three End -->

                <!-- ====== Map One Start -->
                {{-- <include src="./partials/map-01.html" /> --}}
                <x-user.dashboard.mapA/>
                <!-- ====== Map One End -->

                <!-- ====== Table One Start -->
                <div class="col-span-12 xl:col-span-8">
                  {{-- <include src="./partials/table-01.html" /> --}}
                  <x-user.dashboard.tableA />
                </div>
                <!-- ====== Table One End -->

                <!-- ====== Chat Card Start -->
                <x-user.dashboard.table/>

                <!-- ====== Chat Card End -->
              </div>
            </div>
          </main>
          <!-- ===== Main Content End ===== -->
        </div>
        <!-- ===== Content Area End ===== -->
      </div>

</body>

</html>
