<footer>
  <div class="footer clearfix mb-0 text-muted">
      <div class="float-start">
          <p>
            {{ $setting->from_date ? $setting->from_date . " - " : "" }}{{ $setting->to_date ? $setting->to_date : date('Y') }} &copy; {{ $setting->project_name }}
          </p>
      </div>
      <div class="float-end">
      </div>
  </div>
</footer>