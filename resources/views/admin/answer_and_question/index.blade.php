
@extends('layouts.admin_app')
@section('content')
<section id="main-content" >
    <section class="wrappe " style="height:700px;margin-top:70px">
        <div class="container">
            <div class="row"></div>
            <div class="bg-white p-3 mt-2" >
                <h3 class="py-2" >Все вопросы и ответы</h3>
                <table class="table table-bordered table-striped" >
                    <thead>
                    <tr>
                        <th scope="col" style="width:100px">№</th>
                        <th scope="col" style="width:250px">Вопросы с ответом</th>

                        <th scope="col" class= "text-center" colspan=2>Редактировать</th>

                    </tr>
                    </thead>
                    <tbody>
                        @foreach( $get_answer_and_question as $items)
                            <tr>
                                <td>{{ $items->id }}</td>
                                <td style="width:100px">{!! $items->answer_and_question !!}</td>

                                <td style="width:100px" class="text-center">
                                     <a href="{{ route ('editanswer',$items->id) }}" class="btn btn-info btn-sm mr-1 "><i class="fa fa-edit"></i></a>
                                     <button id="deletequestion"  data-id="{{$items->id}}"  class="btn my-2" style="background:#394a59;color:#fff"><i class="fa fa-trash"></i></button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>


        </div>


    </section>
</section>
<script>
    document.querySelectorAll('.btn').forEach( el =>{
    el.addEventListener('click', (e) =>{

        let that = e
        let file_id = e.target.getAttribute('data-id')
        console.log(file_id)
        csrf = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

        fetch('/delete-answer-question/'+file_id,{
                    method: 'get',
                    headers:  {

                            'X-CSRF-TOKEN':csrf
                        },

                }).then(async response => {
                        if (!response.ok) {
                        }else{
                            const success = await response.json();
                            if(success.message == 'deleted'){
                                console.log(e.target.parentNode.parentNode)

                                e.target.parentNode.parentNode.remove()

                            }
                        }
                    })

    })
})


CKEDITOR.replace('question')
</script>
@endsection('content')
