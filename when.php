<?php
include("Include/header.html");
include("Include/navigation.html");
?>
<div class ="mainContent">
    <h2>When should I use the Façade Design Pattern?</h2>

    <h3>A simple interface in a complex system</h3>
    <p>Now we have seen what the Façade pattern is we will turn our attention to when to use it.
        The façade pattern is best used in situations where you want to have a simple single interface 
        to an already existing complex subsystem.
        For example, in web services, one web service might access a number of smaller services that have 
        been hidden from the caller by the façade.
        Façade can be applied when a there are a lot of complex classes in a subsystem in order to make access 
        simpler for the client and to define a single point of entry. This has the added advantage of avoiding the client accessing the subsystem directly, as we will see. </p>

    <h3>Duplications</h3>
    <p> Suppose we have three clients accessing the same subsystem. These clients all have code within them that handles accessing the
        subsystem. This is obviously a unnecessary duplication of the same code. Using the façade pattern, we can take the code for accessing the 
        subsystem and place it within the façade class. Now, all three clients need only access the façade class, rather than having
        to access the subsystem independently. </p>

    <h3>System changes frequently</h3>
    <p>A interesting extension to the Façade pattern is encapsulation, as we will see later in <strong>Variations.</strong>
        Because the Façade accesses the subsystem for the client swapping out the subsystem can be made a lot easier through the use of the Façade class.</p>

    <img src ="Images/CodeChanges.png"  title="System Changes Example" alt ="System changes" style="width: 40%; height: 40%;">
    <img src ="Images/CodeChanges2.png"  title="System Changes Example" alt ="System changes" style="width: 40%; height: 40%;">

    <h3>Façade vs Adapter patterns</h3>
    <p>The Adapter Pattern and the Façade Pattern solve similar but different problems. 
        The intent of the Adapter Pattern is to adapt a class interface into an expected interface used by an existing client class or classes. 
        The intent of the Façade Pattern on the other hand is to simplify the access to a subsystem by providing a unified interface.
        Both design patterns act as wrappers of an existing class, as well as providing a useful interface to the client.</p>
    <p>With Façade, the intent is to simplify the existing interface, while with Adapter, the existing interface does not match requirements and needs to be converted into a usable form. 
        The Façade class often encapsulates many classes while Adapter tends to encapsulate only one. 
        A Façade class can simplify a single, very complex object, while an adapter can wrap multiple objects at once in order to access all the functionality it needs.
    </p>
    <div class="quote center">
        <p>"An Adapter is used when the wrapper must respect a particular interface and must support a polymorphic behaviour. On the other hand, a façade is used when one wants an easier or simpler interface to work with." (Wikipedia - The Facade Pattern)</p>
    </div>
    <h3>Simple example</h3>
    <p> Imagine you want to organize a marriage reception. You need to do the following: </p>
    <ul>
        <li>decorate the hall where the event is planned</li>
        <li>hire a band to play some music</li>
        <li>organize dinner for say 100 people</li>
        <li>snack in the evening for around 50 people</li>
    </ul>
    <p>If you wanted to organize such an event some 10 years back, you wanted to go to a caterer for food, a musical troop for music, and organize flowers and people to decorate them, and so on. 
        Some twenty years back, we needed to go to the fish market, the meat shop, the vegetable market etc., for the raw materials for the food and then organize a cook so that you have everything ready for the event.
        Now life is really simpler, with event managers you just need to talk to the event manager and tell them your requirements. The event manager then liaises with the appropriate people to meet your requirements 
        This is an example of a Façade design pattern. You don’t need to interact with many different objects (people) for each and every activity. You will be provided a single interface (the event manager) which will act as a façade for many activities. This makes the life of clients much simpler.
    </p>
</div>
<?php
include("Include/footer.html");
/*
 * End of file
 */
