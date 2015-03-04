<?php
include("Include/header.html");
include("Include/navigation.html");
?>
<div class ="mainContent">
    <H2>Variations</H2>
    <p>
        Most of the time Façade pattern is used in order to create a simpler interface for connecting to the application you are interested in.    
        however there are some variations which can be applied to the Façade Pattern, let's take a look at some of these variations now.</p>
</p>

<h3>Reduction</h3>
<p>The Façade pattern can be useful in reducing the number of classes the client application communicates with. Fewer dependencies between client and system
    mean more flexible development of the system and make it easier to change the functionality of the sub-system without the need to make changes in the client.
</p>

<h3>Supplement</h3>
<p>
    Another variation of Façade pattern is the supplementation of existing functions with new routines, this is more of an addition to the traditional use of Façade.
    The Façade class contains methods from subsystem classes but it also contains some additional new functionality, usually extending the subsystem methods.
</p>
<img src="Images/SupplementEx.png" alt="Supplement Example" title="Supplement Example" class="center"/>
<h3>
    Encapsulation
</h3>
<p>
    In this variation the Façade pattern is used to encapsulate or hide the system. In this case the system is linked to façade class, but not represented to user. All methods are private to any client but not to façade.
    Therefore the client is forced to use the Façade Class to access the system.
    Encapsulating the sub-system in this way can provide a number of benefits:
</p>

<ol>
    <li> Track system usage</li>
    <p>Because all the access to system goes through Façade, we can easily track usage of the system through this single point of entry providing lots of useful data.</p>
    <li> Swapping out systems</li>
    <p>At some point in the software's life-cycle it may become necessary to swap out the existing sub-system for a new one, in this case the Façade pattern can be very useful. 
        When the sub-system is changed for a new one, the only class that needs to be modified will be the Façade class,
        whereas when this design pattern is not used you would have to change the code of all client classes that interact with the sub-system.</p>
    <img src="Images/SystemSwapEx.png" alt="System Swap Example" title="System Swap Example" class="center"/>
</ol>

<h3>
    Privacy
</h3>
<p>One of the main uses of Façade pattern is hiding details that are not supposed to be revealed. Façade class only contains classes and variables that client can use, effectively hiding other ones.
    Let's consider an an example of this use-case: Suppose a system has different clients that use system in different ways. In this case separate façade classes are created for each client and contain only the methods that each specific client can use. 
    It's clear to see that if each client can only communicate with the system using Façade class and does not have other way to access a system then we can easily limit access to the sub-system to only the functionality that is required by an individual client.
</p>
<img src="Images/PrivacyExample.png" title="privacy Example" alt="Privacy Example" class="center"/>  
<?php
include("Include/footer.html");
/*
 * End of file
 */