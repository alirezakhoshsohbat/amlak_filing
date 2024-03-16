@if (auth()->check() && !auth()->user()->hasVerifiedEmail())
    <div class="alert alert-danger">
        <p> ایمیل شما هنوز تایید نشده است. لطفاً ایمیل خود را چک کنید و در صورت لزوم دوباره ایمیل تایید را درخواست کنید.</p>
    </div>
@endif
