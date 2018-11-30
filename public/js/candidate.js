//
// //
// $('select').each(function(){
//     var $this = $(this), numberOfOptions = $(this).children('option').length;
//
//     $this.addClass('s-hidden');
//     $this.wrap('<div class="ganselect"></div>');
//     $this.after('<div class="ganselect-styled"></div>');
//     //
//     var $styleSelect = $this.next('div.ganselect-styled');
//     $styleSelect.text($this.children('option').eq(0).text());
//
//     var $list = $('<ul/>', {
//         'class': 'ganselect-options'
//     }).insertAfter($styleSelect);
//
//     for (var i = 0; i < numberOfOptions; i++) {
//         $('<li />', {
//             text: $this.children('option').eq(i).text(),
//             rel: $this.children('option').eq(i).val()
//         }).appendTo($list);
//     }
//
//     var $listItems = $list.children('li');
//
//     $styleSelect.click(function(e) {
//         e.stopPropagation();
//         $('div.ganselect-styled.active').not(this).each(function(){
//             $(this).removeClass('active').next('ul.ganselect-options').hide();
//         });
//         $(this).toggleClass('active').next('ul.ganselect-options').toggle();
//     });
//
//     $listItems.click(function(e) {
//         e.stopPropagation();
//         $styleSelect.text($(this).text()).removeClass('active');
//         $this.val($(this).attr('rel'));
//         $list.hide();
//         //console.log($this.val());
//     });
//
//     $(document).click(function() {
//         $styleSelect.removeClass('active');
//         $list.hide();
//     });
//
// });
//
//
