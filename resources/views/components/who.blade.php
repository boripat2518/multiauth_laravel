@if (Auth::guard('web')->check())
<p>
  You are login as <strong>User</strong>.
</p>
@else
<p class="text-danger">
  You are logout from <strong>User</strong>.
</p>
@endif


@if (Auth::guard('admin')->check())
<p>
  You are login as <strong>Admin</strong>.
</p>
@else
<p class="text-danger">
  You are logout from <strong>Admin</strong>.
</p>
@endif

@if (Auth::guard('merchant')->check())
<p>
  You are login as <strong>Merchant</strong>.
</p>
@else
<p class="text-danger">
  You are logout from <strong>Merchant</strong>.
</p>
@endif
