@if (session('status'))
    <div class="alert alert-success alert-dismissible">
        <i class="bx bx-check-circle"></i>
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        {{ session('status') }}
    </div>
@endif
@if (session('danger'))
    <div class="alert alert-danger alert-dismissible">
        <i class="bx bx-error-alt"></i>
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        {{ session('danger') }}
    </div>
@endif
@if (session('warning'))
    <div class="alert alert-warning alert-dismissible">
        <i class="bx bx-error-alt"></i>
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        {{ session('warning') }}
    </div>
@endif
@if (session('info'))
    <div class="alert alert-info alert-dismissible">
        <i class="bx bx-error-alt"></i>
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        {{ session('info') }}
    </div>
@endif