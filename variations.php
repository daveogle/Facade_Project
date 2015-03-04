<?php
include("Include/header.html");
include("Include/navigation.html");
?>
<div class ="mainContent">
    <H2>Variations</H2>
    <p>
        Most of the time Facade pattern is used in order to create a simpler interface for connecting to the application you are interested in.    
        However there are some variations to use cases of Facade
    </p>

    <h3>Reduction</h3>
    <p>
        Facade pattern might be useful in order to reduce number of classes client application communicate with. 
        The less dependencies there are in between client and other system,the more flexible development of the system is.
    </p>
    
    <h3>Supplement</h3>
    <p>
        Other variation of Facade pattern is supplement of existing functions with new routines. This is more of a addition to traditional use of facade. 
        Facade class still stores the subset of the class(number of methods)but it also contains some additional new functionality, usually based on the subset stored.
    </p>
    <img src="Images/SupplementEx.png" alt="Suppliment Example" class="center"/>
    <h3>
        Encapsulation
    </h3>
    <p>
        Facade pattern is used to encapsulate the system. In this case system is linked to facade class, but not represented to user. 
        All the methods in client are private to any client but not to facade.
        Therefore the client MUST use Facade to access the system.
        Encapsulating can be done for number of reasons:
    </p>
    
    <ul>
        <li> Track system usage</li>
        <p>Because all the access to system goes through Facade, the usage of the system can be easily tracked. If there was no Facade class, the data about usage would be distributed.</p>
    </ul>
    <ul>
        <li> Swap out systems</li>
        <p>If you assume that your system will need to be changed at some point in the future, you should consider using Facade pattern. When your system is changed for a new one, the only class that need to be changed with the system is a Facade class,
            whereas when this design pattern is not used you would have to change all of the clients code. </p>
        <img src="Images/SystemSwapEx.png" alt="System Swap Example" class="center"/>
    </ul>
    
    <h3>
        Privacy
    </h3>
    <p>
        One of the main uses of facade pattern is hiding details that are not supposed to be revealed. Facade class only contains classes and variables that client can use hiding other ones.
        As an example of use case: System has different clients that use system in different way. In this case to separate facade class are created for each client and contain only methods that this specific client can use. 
        It only makes sense if client communicate with the system using Facade class and does not have other way to access a system.
    </p>
    
    <img src="Images/PrivacyExample.png" alt="Privacy Example" class="center"/>  
    <?php
    include("Include/footer.html");
    /*
 * End of file
 */