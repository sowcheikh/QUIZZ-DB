<div class="row">
    <div class="col"><h3 class="text-info text-center">Liste des Joueurs</h3>
</div>
</div>
<div class="table-responsive" id="user_data">
<input type="hidden" id="date" value="">
    <div id="scrollZone" class="col " style="height: 300px;">
<?php
                    $output = '<table class="table" id="mytable">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nom</th>
                        <th scope="col">Points</th>
                        <th scope="col">Delete</th>
                      </tr>
                    </thead>';
    
                    if ($total_row > 0) {
                        foreach ($result as $row) {
    $output .=
                          ' <tbody id="tbody">
                          <tr>
                          <td>'.$row['id'].'</td>
                          <td>'.$row['name'].'</td>
                          <td>'.$row['score'].'pts'.'</td>
                          <td><button type="button" class="btn btn-danger btn-xs delete">Delete</button></td>
                        </tr>
                        </tbody>';
                        }
                    } else {
                            $output .='<td colspan)"4" class="center">Data not found</td>';
                    }
                    $output .= '</table>';
             
                    echo $output;

?>
</div>
</div>
<div class="pagination-container">
    <nav>
        <ul class="pagination">
        </ul>
    </nav>
</div>
<script>
    let table = '#mytable'
    $("#maxRows").on('change', function () {
        $('.pagination').html()
        let trnum = 0;
        let maxRows = parseInt($(this).val())
        let totalRows = $(table+' tbody tr').length
        $(table+ 'tr:gt(0)').each(function () {
            trnum++
            if (trnum > maxRows) {
                $(this).hide()
            }
            if (trnum <= maxRows) {
                $(this).show()
            }
        })
        if (totalRows > maxRows) {
            let pagenum = Math.ceil(totalRows/maxRows)
            for (let i = 1; i < pagenum;) {
                $('.pagination').append('<li data-page="'+i+'">\<span>'+ i++ +'<span class="sr-only">(current)</span></span></li>').show
                
            }
        }
        $('.pagination li:first-child').addClass('active')
        $('.pagination li').on('click', function () {
            let pageNum = $(this).attr('data-page')
            let trIndex=0;
            $('.pagination li').removeClass('active')
            $(this).addClass('active')
            $(table+' tr:gt(0)').each(function () {
                trIndex++
                if (trIndex>(maxRows*pageNum) || trIndex<=(maxRows*pageNum)-maxRows) {
                    $(this).hide()
                } else {
                    $(this).show()
                }
            })
        })
    })
</script>