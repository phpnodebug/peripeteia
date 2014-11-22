   <div class="row" style="margin-top:50px;">
   <form ng-submit="create()" >
   <div class="small-12 large-6 columns">
      <fieldset>
         <legend>General Information</legend>
            <label for="course_name">Course Name</label>
            <input type="text" ng-model="outline.course_name" name="course_name" id="course_name" placeholder="E.G. Life of David"> 

            <label for="credit_hours">Credit Hours</label>
            <input type="text" ng-model="outline.credit_hours" name="credit_hours" id="credit_hours" placeholder="E.G. 3">

            <label for="instructor_name">Instructor Name</label>
            <input type="text" ng-model="outline.instructor_name" name="instructor_name" id="instructor_name" placeholder="E.G. Mr. Stew Foster">

            <label for="office_location">Office Location</label>
            <input type="text" ng-model="outline.office_location" name="office_location" id="office_location" placeholder="E.G. AC 501">

            <label for="office_hours">Office Hours</label>
            <input type="text" ng-model="outline.office_hours" name="office_hours" id="office_hours" placeholder="E.G Th. II">

            <label for="email">Email</label>
            <input type="email" ng-model="outline.email" name="email" id="email" placeholder="E.G. sfoster@faculty.pcci.edu">
      </fieldset>
   </div>
         
      <div class="small-12 large-6 columns">
         <fieldset>
            <legend>Course Information</legend>
            <label for="course_description">Course Description</label>
            <input type="text" ng-model="outline.course_description" name="course_description" id="course_description" placeholder="Give the catalog description of the course here">

            <label for="course_prerequisites">Prerequisites</label>
            <input type="text" ng-model="outline.course_prerequisites" name="course_prerequisites" id="course_prerequisites" placeholder="E.G. None">

            <label for="course_texts">Required Texts</label>
            <input type="text" ng-model="outline.course_texts" name="course_texts" id="course_texts" placeholder="E.G. The Bible...">

            <label for="course_outcomes">Learning Outcomes</label>
            <textarea ng-model="outline.course_outcomes" placeholder="Upon completing this course, students will be able to... Please remember, learning outcomes should reflect course and program outcomes." name="course_outcomes" id="course_outcomes"></textarea>
         </fieldset>
      </div>
   </div>
   <div class="row">
      <div class="large-12">
         <button ng-click="create()" class="button right">Submit!</button>
      </div>
      </form>
   </div>
   <div class="row">
      <div class="large-12">
         <p>{{ answer }}</p>
      </div>
   </div>
   </div>