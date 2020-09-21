$(document).ready(function(){
  $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });
   $('.major').hide();
  $('.grade').on('change',function(){
    //alert('ok');
    var notes = $(this).val();
    console.log(notes);
      $.post('/studentgrade',{notes:notes},function(response){
        console.log(response);
        var html='';
        $.each(response,function(i,v){
          html+=`
          <option value="${v.id}">${v.name}</option>
          `;
        })
        $('.stuclass').html(html);
        })
      })

    $('.subject').on('change',function(){
    //alert('ok');
    var subject = $(this).val();
    console.log(subject);
      $.post('/teachersubject',{subject:subject},function(response){
        console.log(response);
        var html='';
        $.each(response,function(i,v){
          html+=`
          <option value="${v.id}">${v.user.name}</option>
          `;
        })
        $('.teasub').html(html);
        })
      })

  
      // $('#major').hide(); 

      $('.grade_name').change(function(){

        var grade_name=$('.grade_name option:selected').data('grade');
        // alert(grade_name);
         if (grade_name!="Grade-8") {
          //  $.get('/grade_subject',function(ref){
          //   var html='';
            
          //   $.each(ref,function(i,v){
          //     console.log(v.name);
          //     html+=`
          //     <optgroup label="Choose Subject">
          //         <option value="${v.id}">${v.name}</option>
          //       </optgroup>`;
          //   })
          //  alert('wow');
          // $('.major').show();

          //   $('.grade_subjects').html(html);
          // });
          $('.major').show();
        }else{
         // alert('hi');
          $('.major').hide();
          
         }
      })

 $('.paygrade').on('change',function(){
    //alert('ok');
    var notes = $(this).val();
    console.log(notes);
      $.post('/paymentgrade',{notes:notes},function(response){
        console.log(response);
        var html='';
        $.each(response,function(i,v){
          html+=`
          <option value="${v.id}">${v.name}</option>
          `;
        })
        $('.paystuclass').html(html);
        })
      })
     
    })