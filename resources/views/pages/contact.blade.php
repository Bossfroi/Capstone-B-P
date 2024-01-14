@include('include/navigation')

<div class="container mx-auto bg-gray-200 p-4 rounded">
    <div class="text-center">
      <h2 class="text-2xl font-bold">Contact Us</h2>
      <p>Swing by for a cup of coffee, or leave us a message:</p>
    </div>
      <div class="w-full sm:w-1/2 p-4">
        <form action="/action_page.php">
          <label for="fname" class="block">First Name</label>
          <input type="text" id="fname" name="firstname" placeholder="Your name.." class="w-full p-2 border mb-4">

          <label for="lname" class="block">Last Name</label>
          <input type="text" id="lname" name="lastname" placeholder="Your last name.." class="w-full p-2 border mb-4">

          <label for="lname" class="block">E-mail</label>
          <input type="text" id="lname" name="lastname" placeholder="Your last name.." class="w-full p-2 border mb-4">

          <label for="country" class="block">Gender</label>
          <select id="country" name="country" class="w-full p-2 border mb-4">
            <option value="australia">Male</option>
            <option value="canada">female</option>
          </select>
         <div>
          <p for="subject" class=" text-zinc-800">Subject</p>
          <textarea id="subject" name="subject" placeholder="Write something.." class="w-full p-2 border mb-4" style="height:270px; width:700px;"></textarea>

          <input type="submit" value="Submit" class=" custom-btn btn bg-warning">
          </div>
        </form>
      </div>
    </div>
  </div>

@include('include/footer')
