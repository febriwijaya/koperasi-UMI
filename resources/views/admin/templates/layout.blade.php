@include('admin.templates.header')

@include('admin.templates.navbar')
@include('admin.templates.sidebar')
<div id="layoutSidenav_content">
  <main>
    <div class="container-fluid">
      @yield('content')
    </div>
  </main>
  <footer class="py-4 bg-light mt-auto">
    <div class="container-fluid">
      <div class="d-flex align-items-center justify-content-between small">
        <div class="text-muted">Copyright &copy; Kopcar UMI {{ date('Y') }}</div>
      </div>
    </div>
  </footer>
</div>
@include('admin.templates.footer')