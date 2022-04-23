<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="/">Contacts</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="contacts/new">New Contact <span class="sr-only">(current)</span></a>
            </li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            @if (Session::has('user'))
                <a href="/logout"><button type="submit" class="btn btn-danger">Logout</button></a>
            @else
                <form class="d-flex login justify-content-end" action="login" method="POST">
                    @csrf
                    <input name="email" type="email" class="form-control" placeholder="Email" required>
                    <input name="password" type="password" class="form-control" placeholder="Password" required>
                    <button type="submit" class="btn btn-primary">Login</button>
                </form>
            @endif
        </ul>
    </div>
</nav>
