<?php
include("Include/header.html");
include("Include/navigation.html");
?>
<div class ="mainContent">
    <h2><i>When should I use the Facade Design Pattern?</i></h2>
    
    <h3>A simple interface in a complex system</h3>
    <p>The facade pattern should be used in situations where you would prefer to have a simpler single interface 
        rather than utilising a more complex subsystem.</p>

    <p>For example, in web services, one web service might provide access to a number of smaller services that are hidden from the caller by the facade. It can be applied when a lot of complex classes are used to make a system simpler for users, as well as when only one class is used, to avoid using it directly. </p>
    </br>

    <h3>Duplications</h3>
    <p> Suppose we have three clients accessing the same subsystem. These clients all have code within them that handles accessing the
        subsystem. This is obviously a duplication of the same code. Using the facade pattern, we can take the code for accessing the 
        subsystem and place it within the facade class. Now, all three clients need to access only a facade class, rather than having
        the same code each to access the subsystem independently. </p>
    </br>

    <h3>System changes frequently</h3>
    <p>Facade accesses the subsystems for the client, so if they change often, it does not affect the client, as facade deals with it. </p>
    <img src ="Images/facade_adv.jpg" alt ="System changes">
    
    </br>
     
    <h3>Facade vs Adapter patterns</h3>
    <p>The Adapter Pattern and the Facade Pattern solve different problems. The intent of the Adapter Pattern is to adapt one classes interface into an expected interface used by an existing client class or classes. The intent of the Facade Pattern is to simplify the API of a subsystem. </p>
     
    <p>They both act as wrappers of an existing class. As well as take an interface that is not needed and convert it to an interface that can be used.
    </p>
    <p>With Facade, the intent is to simplify the existing interface. While with Adapter, there is a target interface that can be converted to. Facade hides many classes, Adapter hides only one. However, a Facade can simplify a single, very complex object, while an adapter can wrap multiple objects at once in order to access all the functionality it needs.
    </p>
    <p>The key is simplify (facade) vs convert (adapter).</p>
    <br>
    <h3>Simple example</h3>
    <p> Imagine you want to organize a marriage reception. You need to do the following: </p>
    <ul>
        <li>decorate the hall where the event is planned&nbsp;</li>
        <li>music band to play some music</li>
        <li>organize dinner for say 100 people</li>
        <li>snack in the evening for around 50 people</li>
    </ul>
    <p>If you wanted to organize such an event some 10 years back, you wanted to go to a caterer for food, a musical troop for music, and organize flowers and people to decorate them, and so on. </p>
    <p>Some twenty years back, we needed to go to the fish market, the meat shop, the vegetable market etc., for the raw materials for the food and then organize a cook so that you have everything ready for the event.
    </p>
    <p>Now, life is really simpler with event managers. You just need to walk to an event manager and tell him that you need a hall decorated with flowers, dinner for 100 people, snacks for 50 people, and need a good music troop to play music while the reception is going on. You don’t need to worry about anything, and they will take care of the rest.
    </p>
    <p>This is a typical example for Façade. You don’t need to interact with many different objects for each and every activity. You will be provided a single interface which will act as a façade for many activities. This makes the life of clients much simpler.
    </p>
    <p>Here, you are behaving as a client who initiates the process, and the event manager is working as a "facade" 
        for you, completing the job based on your direction. </p>

  
</div>
<?php
include("Include/footer.html");
/*
 * End of file
 */