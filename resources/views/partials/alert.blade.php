@php
  $showSuccess = session('success') ?? request()->boolean('success');
  $message = is_string(session('success')) ? session('success') : 'Pengajuan perjalanan dinas telah diterima.';
  $showRejected = session('rejected') ?? request()->boolean('rejected');
  $rejectedMessage = is_string(session('rejected')) ? session('rejected') : 'Pengajuan perjalanan dinas telah ditolak.';
@endphp

@if ($showSuccess)
  <div id="alert-success"
       role="alert"
       class="mb-6 opacity-0 -translate-y-2 transition-all duration-300 ease-out">
    <div class="relative overflow-hidden rounded-2xl border border-green-200 bg-gradient-to-r from-green-50 to-emerald-50 shadow">
      <div class="absolute inset-y-0 left-0 w-1 bg-gradient-to-b from-[#FE0004] to-[#F6B101]"></div>
      <div class="p-4 pl-6 pr-12 flex items-start gap-3">
        <div class="h-8 w-8 rounded-lg bg-gradient-to-r from-[#FE0004] to-[#F6B101] flex items-center justify-center text-white shrink-0">
          <i class="fas fa-check"></i>
        </div>
        <div>
          <p class="text-sm font-semibold text-gray-900">Berhasil</p>
          <p class="text-sm text-gray-700">
            {{ $message }}
          </p>
        </div>
        <button type="button" aria-label="Tutup" data-close
                class="absolute top-3 right-3 text-gray-400 hover:text-gray-600">
          <i class="fas fa-times"></i>
        </button>
      </div>
    </div>
  </div>

  <script>
    (function () {
      const el = document.getElementById('alert-success');
      if (!el) return;

      const closeBtn = el.querySelector('[data-close]');
      // Animate in
      requestAnimationFrame(() => el.classList.remove('opacity-0', '-translate-y-2'));

      function dismiss() {
        el.classList.add('opacity-0', '-translate-y-2');
        el.addEventListener('transitionend', () => el.remove(), { once: true });
      }

      closeBtn?.addEventListener('click', dismiss);
      setTimeout(() => { if (document.body.contains(el)) dismiss(); }, 5000);

      // Clean ?success=1 from URL (if present)
      try {
        const url = new URL(window.location.href);
        if (url.searchParams.get('success') === '1') {
          url.searchParams.delete('success');
          const newQuery = url.searchParams.toString();
          window.history.replaceState({}, '', url.pathname + (newQuery ? '?' + newQuery : ''));
        }
      } catch (_) {}
    })();
  </script>
@endif

@if ($showRejected)
  <div id="alert-rejected"
       role="alert"
       class="mb-6 opacity-0 -translate-y-2 transition-all duration-300 ease-out">
    <div class="relative overflow-hidden rounded-2xl border border-red-200 bg-gradient-to-r from-red-50 to-rose-50 shadow">
      <div class="absolute inset-y-0 left-0 w-1 bg-gradient-to-b from-red-500 to-rose-500"></div>
      <div class="p-4 pl-6 pr-12 flex items-start gap-3">
        <div class="h-8 w-8 rounded-lg bg-gradient-to-r from-red-500 to-rose-500 flex items-center justify-center text-white shrink-0">
          <i class="fas fa-times"></i>
        </div>
        <div>
          <p class="text-sm font-semibold text-gray-900">Ditolak</p>
          <p class="text-sm text-gray-700">
            {{ $rejectedMessage }}
          </p>
        </div>
        <button type="button" aria-label="Tutup" data-close
                class="absolute top-3 right-3 text-gray-400 hover:text-gray-600">
          <i class="fas fa-times"></i>
        </button>
      </div>
    </div>
  </div>

  <script>
    (function () {
      const el = document.getElementById('alert-rejected');
      if (!el) return;

      const closeBtn = el.querySelector('[data-close]');
      // Animate in
      requestAnimationFrame(() => el.classList.remove('opacity-0', '-translate-y-2'));

      function dismiss() {
        el.classList.add('opacity-0', '-translate-y-2');
        el.addEventListener('transitionend', () => el.remove(), { once: true });
      }

      closeBtn?.addEventListener('click', dismiss);
      setTimeout(() => { if (document.body.contains(el)) dismiss(); }, 5000);

      // Clean ?rejected=1 from URL (if present)
      try {
        const url = new URL(window.location.href);
        if (url.searchParams.get('rejected') === '1') {
          url.searchParams.delete('rejected');
          const newQuery = url.searchParams.toString();
          window.history.replaceState({}, '', url.pathname + (newQuery ? '?' + newQuery : ''));
        }
      } catch (_) {}
    })();
  </script>
@endif