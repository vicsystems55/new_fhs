    {{-- Vendor Scripts --}}
        <script src="{{ asset('vendors/js/vendors.min.js') }}"></script>
        <script src="{{ asset('vendors/js/ui/prism.min.js') }}"></script>
        @yield('vendor-script')
        {{-- Theme Scripts --}}
        <script src="{{ asset('js/core/app-menu.js') }}"></script>
        <script src="{{ asset('js/core/app.js') }}"></script>
        <script src="{{ asset('js/scripts/components.js') }}"></script>
@if($configData['blankPage'] == false)
        <script src="{{ asset('js/scripts/footer.js') }}"></script>
@endif
        {{-- page script --}}
        @yield('page-script')
