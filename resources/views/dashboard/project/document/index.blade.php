@extends('dashboard.layouts.app')

@section('content')
    <div class="content">
        <div class="content_box" >
            <div class="status">
                <div class="status_main">
                    <p>المشتريات</p>
                </div>
                <div class="status_secondary">
                    <p class="green">المشتريات</p>
                    <i class="fa-solid fa-chevron-down"></i>
                    <p>إضافة مشروع</p>
                </div>
            </div>
            <div class="cont">
                <div class="level" >
                    <p>الرجاء إكمال الخطوات التالية</p>
                    <div class="diagram">
                        <div class="point completed">
                            <div class="number" >١</div>
                            <div class="icon"><i class="fa-solid fa-check not-active "></i></div>
                            <div class="name" >معلومات الشراء</div>
                        </div>
                        <span class="line line_active"></span>
                        <div class="point completed ">
                            <div class="number" >٢</div>
                            <div class="icon"><i class="fa-solid fa-check not-active "></i></div>
                            <div class="name" >معلومات مالية</div>
                        </div>
                        <span class="line line_active"></span>
                        <div class="point active">
                            <div class="number" >٣</div>
                            <div class="icon"><i class="fa-solid fa-check not-active "></i></div>
                            <div class="name" >المستندات</div>
                        </div>
                    </div>
                </div>


                <div  class="globel_alert">
                    <div>
                        <div class="img_box">
                            <img src=" {{ asset('./assets/img/info-2.png') }}" alt="">
                        </div>
                        <p>يجب أن يكون ملفك بصيغة pdf. ولا يزيد حجمه عن 10 ميغابايت</p>
                    </div>
                </div>



                <div class="input_box 1">
                    <p>كشف حساب مصرفي لمدة 6 أشهر (يمكنك إرفاق أكثر من ملف)</p>
                    <div  class="input singal_file " >
                        <div class="placehoder">
                            اختر الملف
                        </div>
                        <div class="add_file">
                            <label for="bank_statements">
                                <img class="img-fluid " src=" {{ asset('./assets/img/material-symbols_upload-rounded.png') }}" alt="">
                                <p >تحميل الملف</p>
                            </label>
                            <input id="bank_statements" name="bank_statements" class="upload_mult_file" type="file">
                        </div>
                    </div>
                    <div class="error error_bank_statements" >
                    </div>

                    <div class="all_files">


                    </div>
                </div>


                <div class="input_box">
                    <p>شهادة الحساب البنكي للمنشأة</p>
                    <div  class="input singal_file fixed_file" >


                        <div class="input-file-log  ">
                            <div class="">
                                <div>
                                    <p class="font-size-10-px">file name.pdf</p>
                                    <p class="font-size-10-px">2.45 MB</p>
                                </div>
                            </div>
                            <div class="img_box">
                                <img src="{{ asset('assets/img/pdf.png') }}" alt="">
                            </div>
                        </div>

                    </div>
                    <div class="info">
                        <img src=" {{ asset('./assets/img/info-2.png') }}" alt="">
                        <p>في حال رغبتك بتعديل معلومات الحساب البنكي يرجى التواصل مع المسؤولين
                            <a href="#">تواصل معنا</a>
                        </p>
                    </div>
                </div>




                <div class="input_box">
                    <p>شهادة ضريبة القيمة المضافة (آخر إقرار ضريبي)</p>
                    <div  class="input singal_file" >
                        <div class="placehoder uploaded_file">
                            اختر الملف
                        </div>
                        <div class="add_file">
                            <label for="last_tax">
                                <img class="img-fluid " src=" {{ asset('./assets/img/material-symbols_upload-rounded.png') }}" alt="">
                                <p >تحميل الملف</p>
                            </label>
                            <input id="last_tax" name="last_tax" class="upload_single_file" type="file">
                        </div>
                    </div>
                    <div class="error error_last_tax" >
                    </div>

                </div>

                <div class="input_box">
                    <p> القوائم المالية (يمكنك إرفاق أكثر من ملف)  <span class="placehoder">(اختياري)</span></p>
                    <div  class="input singal_file " >
                        <div class="placehoder">
                            اختر الملف
                        </div>
                        <div class="add_file">
                            <label for="financial_statements">
                                <img class="img-fluid " src=" {{ asset('./assets/img/material-symbols_upload-rounded.png') }}" alt="">
                                <p >تحميل الملف</p>
                            </label>
                            <input id="financial_statements" name="financial_statements" class="upload_mult_file" type="file">
                        </div>
                    </div>
                    <div class="info">
                        <p>يرجى إرفاق القوائم المالية لآخر سنة.</p>
                    </div>
                    <div class="error error_financial_statements" >
                    </div>

                    <div class="all_files">


                    </div>
                </div>


                <div class="input_box v">
                    <p>الوثائق الداعمة (يمكنك إرفاق أكثر من ملف) <span class="placehoder">(اختياري)</span></p>
                    <div  class="input singal_file " >
                        <div class="placehoder">
                            اختر الملف
                        </div>
                        <div class="add_file">
                            <label for="supporting_documents">
                                <img class="img-fluid " src=" {{ asset('./assets/img/material-symbols_upload-rounded.png') }}" alt="">
                                <p >تحميل الملف</p>
                            </label>
                            <input id="supporting_documents" name="supporting_documents" class="upload_mult_file" type="file">
                        </div>
                    </div>
                    <div class="info">
                        <p>مثال: عقد التأسيس ،الإقرار الضريبي الربعي ،الإقرار الزكوي</p>
                    </div>
                    <div class="error error_supporting_documents" >
                    </div>

                    <div class="all_files">


                    </div>
                </div>


                <div class="input_box checkbox_box">
                    <label for="terms" class="terms position-relative doc_terms">
                        <input type="checkbox" id="terms" name="terms" class="">
                        <span class="terms_check"><i class="fa-solid fa-check"></i></span>
                        <p class="">
                            أقر بعدم وجود تضارب مصالح بين المنشأة والمورد
                            <a href="#">سياسة الاستخدام والخصوصية</a>
                        </p>
                    </label>
                    <div class="error error_terms" >
                    </div>
                </div>


                <div class="pages">
                    <div class="past">
                        <div class="">
                            <i class="fa-solid fa-chevron-down "></i>
                        </div>
                        <a href="{{  route("dashboard.projects.finance.edit",['project'=>$project])  }}">السابق</a>
                    </div>

                    <div class="" id="submit">
                        <p class="">التالي</p>
                        <div class="">
                            <i class="fa-solid fa-chevron-down "></i>
                        </div>
                    </div>

                </div>




            </div>
        </div>
    </div>
@endsection

@section('script')
    <script >
        let files = {
            bank_statements : [],
            financial_statements : [],
            supporting_documents : [],
        }
        let last_tax = '';

        const getShortName = ($name)=>{
            return $name.substr(0, 5)+'...'+$name.substr(-8);
        }

        const addFile = (type,file,el)=>{
            var parent = $(el).parents('.input_box').first().children('.all_files');
            if(type == 'bank_statements'){
                files.bank_statements[file.name] = file;
            }else if(type == 'financial_statements'){
                files.financial_statements[file.name] = file;
            }else if(type == 'supporting_documents'){
                files.supporting_documents[file.name] = file;
            }
            name = getShortName(file.name);
            size = (file.size / 1000000).toFixed(2) +' MB';
            var mult = `
                <div class="file-log  " type="${type}" file_name="${file.name}">
                  <div class="file_box">
                    <div class="">
                      <div>
                        <p class="font-size-10-px">${name}</p>
                        <p class="font-size-10-px">${size}</p>
                      </div>
                    </div>
                    <div class="img_box">
                      <img src="{{ asset('assets/img/pdf.png') }}" alt="">
                    </div>
                  </div>
                  <div class="close_file">
                    <i class="fa-solid fa-xmark remove_mult_file"></i>
                  </div>
                </div>
                  `;
            parent.append(mult)
        }

        $('.upload_mult_file').change(function(){
            var file =  this.files[0];
            var name = $(this).attr('name');
            if (name == 'bank_statements' && ! Boolean(files.bank_statements[file.name])  ){
                addFile('bank_statements',file,this)
            }else if(name == 'financial_statements' && ! Boolean(files.financial_statements[file.name]) ){
                addFile('financial_statements',file,this)
            }else if(name == 'supporting_documents' && ! Boolean(files.supporting_documents[file.name]) ){
                addFile('supporting_documents',file,this)
            }

        })

        $(document).on('click','.remove_mult_file',function (){
            var parent = $(this).parents('.file-log').first();
            var type = parent.attr('type');
            if(type == 'bank_statements'){
                delete files.bank_statements[parent.attr('file_name')];
            }else if(type == 'financial_statements'){
                delete files.financial_statements[parent.attr('file_name')];
            }
            else if(type == 'supporting_documents'){
                delete files.supporting_documents[parent.attr('file_name')];
            }
            parent.find('input').val(null);
            parent.remove()

        });



        $('.upload_single_file').change(function(){
            var file =  this.files[0];
            var parent = $(this).parents('.singal_file').first().children('.uploaded_file');
            name = getShortName(file.name);
            size = (file.size / 1000000).toFixed(2) +' MB';
            var singal = `
                  <div class="input-file-log  ">
                    <div class="">
                      <div>
                        <p class="font-size-10-px">${name}</p>
                        <p class="font-size-10-px">${size}</p>
                      </div>
                    </div>
                    <div class="img_box">
                      <img src="{{ asset('assets/img/pdf.png') }}" alt="">
                    </div>
                    <div class="close_file">
                      <i class="fa-solid fa-xmark remove_singel_file"></i>
                    </div>
                  </div>
                  `;
            parent.html(singal)
            parent.css('background-color','#F4FBFA')
            $(this).parents('.singal_file').find('label').hide()

            last_tax = file;
        })
        $(document).on('click','.remove_singel_file',function (){
            var parent = $(this).parents('.singal_file').first().children('.uploaded_file');
            parent.text('اختر الملف')
            parent.find('input').val(null);
            parent.css('background-color','transparent')
            console.log(parent.parent('div').find('label').show())

            last_tax = null;
        });


        $(document).on('click', '#submit', function (e) {
            var formData = new FormData();
            $(".error").empty();
            var method = '{!! isset($operation)   ? 'post' : 'put'  !!}';
            if (method == 'put'){
                formData.append('_method', 'PUT');
            }
            var index = 0;
            for(let file in files){
                for(let pdf in files[file]){
                    formData.append(file+"["+index+"]",files[file][pdf])
                    index++;
                }
                index =0;
            }
            formData.append('last_tax',last_tax)
            $('#terms').is(":checked") ? formData.append('terms',$('#terms').val()) : '';
            $.ajax({
                type : 'post'  ,
                enctype: 'multipart/form-data',
                url:   "{{ route('dashboard.projects.document.store',['project'=>$project]) }}",
                data: formData ,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                processData: false,
                contentType: false,
                cache: false,
                success: function (data) {
                    window.location.href = " {{route('dashboard.project' )}} ";
                }, error: function (reject) {
                    console.log(reject)
                    let errors = reject.responseJSON.errors;
                    for(let err in errors){
                        console.log(err)
                        if (errors.hasOwnProperty(err)) {
                            if(err.split('.')[1] != null){
                                (errors[err]).forEach(message=>{
                                    $('.'+err.split('.')[0]+'_files').find('.error').eq(err.split('.')[1])
                                        .append('<small class="text-danger">'+message+'</small>')
                                })
                            }else{
                                (errors[err]).forEach(message=>{
                                    $('.error_'+err).append('<small class="input_error">'+message+'</small>')
                                })
                            }
                        }
                    }
                }
            });

        });
    </script>
@endsection
