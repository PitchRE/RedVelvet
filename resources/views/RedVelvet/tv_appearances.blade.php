<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"
        integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
        integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/bootstrap-table@1.14.1/dist/bootstrap-table.min.css">
</head>

<body>
    <div class="container-fluid">
        <table data-toggle="table" class="table table-hover table-striped table-bordered table-light"
            data-pagination="true" data-search="true" data-sort-stable="true">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Date</th>
                    <th>Link</th>
                </tr>
            </thead>
            <tbody class="tableStyle">
                @foreach($result as $results)

                <tr title="Desc" data-html="true" data-placement="bottom" data-toggle="popover" data-trigger="hover" data-content="{{ $results['description']}}">
                    <td>{{ $results['name']}}</td>
                    <td>{{ $results['date']}}</td>
                    <td><button onClick="resultClick('{{$results['link']}}')">Click</button></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"
        integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"
        integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k"
        crossorigin="anonymous"></script>
    <script src="https://unpkg.com/bootstrap-table@1.14.1/dist/bootstrap-table.min.js"></script>
</body>

<script>
    $(function () {
        $('[data-toggle="tooltip"]').tooltip({
            animated: 'fade',
            placement: 'bottom',
            html: true
        });

    })

    $(document).ready(function () {
        $('[data-toggle="popover"]').popover()
        
    });
    function resultClick(href){
    window.open(href);
}

</script>
<style>


.popover .arrow{
    display:none;           
}
    
    .tableStyle {
        font-weight: 700;
        font-family: 'Courier New', Courier, monospace
    }

    body {
        background: #b92b27;
        /* fallback for old browsers */
        background: -webkit-linear-gradient(to right, #1565C0, #b92b27);
        /* Chrome 10-25, Safari 5.1-6 */
        background: linear-gradient(to right, #1565C0, #b92b27);
        /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

    }
</style>

</html>