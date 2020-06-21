<template>
    <div class="container">

                        <h1>ask for teacher</h1>

        <form action="#" method="post">



            <!--for subject name-->
                <div class="form-group">
                    <label for="subject">اسم المادة</label>
                    <select class="form-control" name="subject" id="subject">
                        <option value=""> </option>
                    </select>
                </div>

            <!--for fpr colleges-->
                <div class="form-group">
                    <label for="college">الكلية
                    </label>
                    <select class="form-control" name="college" id="college">
                     <option value=""></option>


                    </select>
                </div>
            <!--for fpr colleges-->
                <div class="form-group">
                    <label for="university">الجامعة</label>
                    <select class="form-control" name="university" id="university">
                    <option value=""> </option>
                    </select>

                 </div>





                 <button name="submit" type="submit" class="btn btn-primary">عرض الأساتذة</button>


        </form>




    </div>






</template>

<script>
    export default {

         data() {
    return {
                university:'' ,
                college:'' ,
                subject: '' ,



            }} ,
            methods:
            {

            },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
