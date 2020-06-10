
    // let table = '#mytable'
    // $("#maxRows").on('change', function () {
    //     $('.pagination').html()
    //     let trnum = 0;
    //     let maxRows = parseInt($(this).val())
    //     let totalRows = $(table+' tbody tr').length
    //     $(table+ 'tr:gt(0)').each(function () {
    //         trnum++
    //         if (trnum > maxRows) {
    //             $(this).hide()
    //         }
    //         if (trnum <= maxRows) {
    //             $(this).show()
    //         }
    //     })
    //     if (totalRows > maxRows) {
    //         let pagenum = Math.ceil(totalRows/maxRows)
    //         for (let i = 1; i < pagenum;) {
    //             $('.pagination').append('<li data-page="'+i+'">\<span>'+ i++ +'<span class="sr-only">(current)</span></span></li>').show
                
    //         }
    //     }
    //     $('.pagination li:first-child').addClass('active')
    //     $('.pagination li').on('click', function () {
    //         let pageNum = $(this).attr('data-page')
    //         let trIndex=0;
    //         $('.pagination li').removeClass('active')
    //         $(this).addClass('active')
    //         $(table+' tr:gt(0)').each(function () {
    //             trIndex++
    //             if (trIndex>(maxRows*pageNum) || trIndex<=(maxRows*pageNum)-maxRows) {
    //                 $(this).hide()
    //             } else {
    //                 $(this).show()
    //             }
    //         })
    //     })
    // })
