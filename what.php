<?php
include("Include/header.html");
include("Include/navigation.html");
?>
<div class ="mainContent">
    <H2>What is the Façade Design Pattern</H2>

    <p>The Façade Design Pattern is an example of a structural design pattern. These patterns aim to identify simple ways in which relationships between objects/entities in a system can be formed.
        The Façade Design Pattern is described formally as:</p>

    <p>"The Façade Pattern provides a unified interface to a set of interfaces in a subsystem. Façade defines a higher-level interface that makes the subsystem easier to use" (Gamma et al. 1995)</p>

    <p>Let's look at what this means in practice. In essence the basic purpose of the Façade Design Pattern is to offer a simplified, easy to use interface to a more complicated subsystem. 
        This differs in an important way from a very similar structural design pattern, the Adapter Pattern, which aims to adapt interfaces to match the expectations of a client.
        A Façade also serves another important purpose, it decouples a clients reliance on a subsystem from the subsystem itself, provided that the client is coded to the Façade rather than the subsystem.
        This means that any alterations made to how the subsystem operates do not require changes be made to the client, just to the Façade.</p>

    <img src="Images/simpleFacade.png" alt="Façade Example" class="center" style="width: 60%; height: 60%; "/>
    
    <p>The decoupling between client and complex subsystem also helps reduce the number of objects which the client has to interact with, helping to adhere to the 'Principle of Least Knowledge' or 'Law of demeter'.
        Essentially reducing the dependencies which the client has, to the Façade rather than the potentially many classes in the subsystem, and thus the likely-hood of changes cascading through the system. This helps to
        improve software by making it easier to maintain and more adaptable. However it is important to keep in mind that this can lead to more wrapper classes being written which can increase time and space overheads, thus
        leading to a trade off between more coupling and inefficiency.</p>
    <br>
</div>
<?php
include("Include/footer.html");
/*
 * End of file
 */ 