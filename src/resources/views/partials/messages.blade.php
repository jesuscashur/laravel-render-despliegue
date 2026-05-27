@if (session('success'))
    <div class="flash alert alert-success" style="background-color: #d4edda; color: #155724; border: 1px solid #c3e6cb; padding: 15px; border-radius: 6px; margin-bottom: 20px; font-weight: bold; display: flex; align-items: center; gap: 10px;">
        ✅ {{ session('success') }}
    </div>
@endif

@if (session('danger') || session('error'))
    <div class="flash alert alert-danger" style="background-color: #f8d7da; color: #721c24; border: 1px solid #f5c6cb; padding: 15px; border-radius: 6px; margin-bottom: 20px; font-weight: bold; display: flex; align-items: center; gap: 10px;">
        ❌ {{ session('danger') ?: session('error') }}
    </div>
@endif
