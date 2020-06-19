require('./bootstrap');

require('../../node_modules/datatables.net-bs4/js/dataTables.bootstrap4');

/*
* APP
*/

const App = {
    navigation () {
        $("#sidebarToggle, #sidebarToggleTop").on('click', function(e) {
            $("body").toggleClass("sidebar-toggled");
            $(".sidebar").toggleClass("toggled");
            if ($(".sidebar").hasClass("toggled")) {
                $('.sidebar .collapse').collapse('hide');
            };
        });

        $(window).resize(function() {
            if ($(window).width() < 768) {
                $('.sidebar .collapse').collapse('hide');
            };
        });

        $('body.fixed-nav .sidebar').on('mousewheel DOMMouseScroll wheel', function(e) {
            if ($(window).width() > 768) {
                var e0 = e.originalEvent,
                    delta = e0.wheelDelta || -e0.detail;
                this.scrollTop += (delta < 0 ? 1 : -1) * 30;
                e.preventDefault();
            }
        });

        $(document).on('scroll', function() {
            var scrollDistance = $(this).scrollTop();
            if (scrollDistance > 100) {
                $('.scroll-to-top').fadeIn();
            } else {
                $('.scroll-to-top').fadeOut();
            }
        });

        $(document).on('click', 'a.scroll-to-top', function(e) {
            var $anchor = $(this);
            $('html, body').stop().animate({
                scrollTop: ($($anchor.attr('href')).offset().top)
            }, 1000);
            e.preventDefault();
        });

        $('.dropdown-item-cat').on('click', function(e) {
            $('#dropdownMenuButtonCat').html($(this).html());
            $('#id_cat').val($(this).val());
        });

        $('.dropdown-item-author').on('click', function(e) {
            $('#dropdownMenuButtonAuthor').html($(this).html());
            $('#id_author').val($(this).val());
        });

        $('.dropdown-item-publishing').on('click', function(e) {
            $('#dropdownMenuButtonPublishing').html($(this).html());
            $('#id_publishing').val($(this).val());
        });

        $('.dropdown-item-products').on('click', function(e) {
            $('#dropdownMenuButtonProducts').html($(this).html());
            $('#id_products').val($(this).val());
        });

        $('#dataTable').DataTable({
            "pageLength": 3,
            "lengthMenu": [[1, 3, 5, 10, -1], [1, 3, 5, 10, "Wszystko"]],
            "language": {
                "processing":     "Przetwarzanie...",
                "search":         "Szukaj:",
                "lengthMenu":     "Pokaż _MENU_ pozycji",
                "info":           "Pozycje od _START_ do _END_ z _TOTAL_ łącznie",
                "infoEmpty":      "Pozycji 0 z 0 dostępnych",
                "infoFiltered":   "(filtrowanie spośród _MAX_ dostępnych pozycji)",
                "infoPostFix":    "",
                "loadingRecords": "Wczytywanie...",
                "zeroRecords":    "Nie znaleziono pasujących pozycji",
                "emptyTable":     "Brak danych",
                "paginate": {
                    "first":      "Pierwsza",
                    "previous":   "Poprzednia",
                    "next":       "Następna",
                    "last":       "Ostatnia"
                },
                "aria": {
                    "sortAscending": ": aktywuj, by posortować kolumnę rosnąco",
                    "sortDescending": ": aktywuj, by posortować kolumnę malejąco"
                }
            }
        });
    },
    init () {
        $(document).ready(() => {
            this.navigation();
        });

        window.onload = () => {

        };

        window.onresize = () => {

        };
    }
};

App.init();