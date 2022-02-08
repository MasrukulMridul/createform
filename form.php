<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <main>
        <form action="id.php" method= "POST">
         <h1>Create Your ID Card</h1>
        <!-- Name Field-->
         <div class="form-field">
             <label for="field" class="label--requiered">Name</label>
             <section>
                 <input name="std_name" id="field" required type="text" placeholder="Jane Doe"/>
             </section>       
         </div>
          <!-- Phone Field-->
          <div class="form-field">
             <label for="field" class="label--requiered">Phone</label>
             <section>
                 <input name="std_phone" id="field" required type="tel" placeholder="(+880) 008 880"/>
             </section>       
         </div>
          <!-- Email Field-->
          <div class="form-field">
             <label for="field" class="label--requiered">Email</label>
             <section>
                 <input name="std_email" id="field" required type="email" placeholder="someone@gmai.com"/>
             </section>       
         </div>
          <!-- Course Field-->
          <div class="form-field">
             <label for="field" class="label--requiered">Course</label>
             <section>
                 <input name="std_course" id="field" required type="text" placeholder="Name of your Course"/>
             </section>       
         </div>
          <!-- Batch Field-->
          <div class="form-field">
             <label for="field" class="label--requiered">Batch No</label>
             <section>
                 <input name="std_batch" id="field" required type="text" placeholder="Your Batch No"/>
             </section>       
         </div>
         <!--Buttons-->
         <div>
             <input name="generate-btn" type="submit" class="a-btn--filled" value="Generate ID">
         </div>


        </form>
    </main>
</body>
</html>