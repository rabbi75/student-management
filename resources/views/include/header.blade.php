<div class="container-fluid">
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">CRUD</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('student.welcome')  }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('student.create')  }}">Add Student</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('course.index')  }}">Course List</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('takes.index')  }}">Take List</a>
                    </li>
                </ul>
                <form class="d-flex" action=" {{ route('search') }} " method="get">
                    <input class="form-control me-2" required name="search" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit" name="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
</div>
