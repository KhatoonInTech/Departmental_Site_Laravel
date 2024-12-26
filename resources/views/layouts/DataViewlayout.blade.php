<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Department of Computer Engineering | BZU Multan')</title>

    <!-- SEO Meta Tags -->
    <meta name="description"
        content="Discover the Department of Computer Engineering at BZU Multan. Established in 2004, offering PEC-accredited programs in Computer Engineering. Learn about our cutting-edge curriculum and facilities.">
    <meta name="keywords"
        content="BZU Computer Engineering, PEC Accredited, Computer Hardware, Software Engineering, Robotics, Embedded Systems, Computer Vision">


</head>

<body>
    <div class="container ">
        <div class="row">
            <div class="col-md-3" style="margin-top:10%; padding-left:-70px ; margin-left:0%">
                @include('layouts.adminSidebarlayout')
            </div>
            <div class="col-md-9">
                @if (session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <h1 class="text-center text-title2 mb-4"><strong>Administration Portal</strong></h1>
                <hr>
                <main>
                    @yield('content')
                </main>
            </div>
        </div>
        <br><br>
        <p class="text-center" style="font-size:0.5rem; margin-bottom:0.5rem">©️Admin Block | Department of Computer
            Engineering</p>
        <p class="text-center" style="font-size:0.5rem; margin-top:0.5rem">Bahauddin Zakariya University Multan</p>
        @include('layouts.footer')

    </div>
    <!-- Delete Modal -->
    <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteModalLabel">Confirm Deletion</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-warning">
                    Are you sure you want to delete <strong id="deleteItemName"></strong>? This action cannot be undone.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <form id="deleteForm" method="POST">
                        @csrf
                        @method('DELETE')
                        <input type="hidden" name="ID" id="ID">
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const deleteModal = document.getElementById('deleteModal');
            const deleteForm = document.getElementById('deleteForm');
            const deleteItemName = document.getElementById('deleteItemName');
            const IDInput = document.getElementById('ID');


            deleteModal.addEventListener('show.bs.modal', function(event) {
                const button = event.relatedTarget;
                const ID = button.getAttribute('data-id');
                const itemName = button.getAttribute('data-name');
                const context = button.getAttribute('data-context');
                if (context == 'admin') {
                    deleteItemName.textContent = '/dismiss ' + itemName + 'as an admin';
                } else {
                    deleteItemName.textContent = itemName;
                }

                // Map contexts to their corresponding routes
                const routes = {
                    'admin': '/admin/' + ID + '/delete',
                    'student': '/student/' + ID + '/delete',
                    'faculty': '/faculty/' + ID + '/delete'
                };

                deleteForm.action = routes[context];
                IDInput.value = ID;
            });
        });
    </script>
    <!-- External JS Libraries -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"></script>

    <script>
        $(document).ready(function() {
            function startCounter($counter) {
                const target = parseInt($counter.text());
                let count = 0;
                const duration = 300;
                const increment = target / (duration / 16);

                const updateCounter = () => {
                    count += increment;
                    if (count < target) {
                        $counter.text(Math.ceil(count));
                        requestAnimationFrame(updateCounter);
                    } else {
                        $counter.text(target);
                    }
                };
                updateCounter();
            }

            // Run on page load
            $('.counter').each(function() {
                startCounter($(this));
            });

            // Run on hover
            $('.data-card').hover(function() {
                startCounter($(this).find('.counter'));
            });
        });
    </script>
    @yield('scripts')

</body>

</html>
