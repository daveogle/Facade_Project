<?php
include("Include/header.html");
include("Include/navigation.html");
?>
<div class ="mainContent">
    <h2><i>When should I use the Façade Design Pattern?</i></h2>
    
    <h3>A simple interface in a complex system</h3>
           <p>Now we have seen what the Façade pattern is we will turn our attention to when to use it.
                 The façade pattern is best used in situations where you want to have a simple single interface 
                 to an already existing complex subsystem.
                 For example, in web services, one web service might provide access to a number of smaller services that have 
                 been hidden from the caller by the façade. <strong><--(Maybe change to web api?) </strong>
                Façade can be applied when a there are a lot of complex classes in a subsystem in order to make access 
                simpler for the client and to define a single point of entry. This has the added advantage of avoiding the client accessing the subsystem directly, as we will see. </p>
    <br>

    <h3>Duplications</h3>
    <p>If for any reason you have to duplicate the same code again and again in different places, you may want to 
        create a lead controller that will handle all of the repeating code, helping to reduce code duplication and 
        improving its maintainability. As it is much easier to change code once, than doing it multiple times in 
        several places.</p>
    <p>The client will just call the lead controller to perform actions based on the parameters 
        provided. </p>
    </br>

    <h3>System changes frequently</h3>
    <p>Façade accesses the subsystems for the client, so if they change often, it does not affect the client, as façade deals with it. </p>
    <img src ="Images/facade_adv.jpg" alt ="System changes">
    
    </br>
     
    <h3>Façade vs Adapter patterns</h3>
    <p>The Adapter Pattern and the Façade Pattern solve different problems. The intent of the Adapter Pattern is to adapt one classes interface into an expected interface used by an existing client class or classes. The intent of the Facade Pattern is to simplify the API of a subsystem. </p>
     </br>

     <h3>Simple example</h3>
    <p>Let's say that you have been given a task to plan your friend's marriage. If you do everything on your own, 
        then imagine the things you need to cover. It will create a higher possibility for error, and increase the 
        chance of missing something that can drastically affect your friend's wedding. </p>

    <p>In this case, instead of doing everything on your own, you should use a wedding planner and make sure the job 
        gets done in a well-managed manner with less chance of a mistake. </p>

    <p>Here, you are behaving as a client who initiates the process, and the wedding planner is working as a "façade" 
        for you, completing the job based on your direction. </p>

</div>
<?php
include("Include/footer.html");
/*
 * End of file
 */