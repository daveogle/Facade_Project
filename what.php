<?php
include("Include/header.html");
include("Include/navigation.html");
?>
<div class ="mainContent">
    <H2>What is the Façade Design Pattern</H2>

    <p>
        You might be asking yourself "What is the Façade Design Pattern?".
        The Façade Design Pattern is an example of a structural design pattern. 
        These patterns aim to identify simple ways in which relationships between objects/entities in a system can be formed.
        More formally this can be described as follows:
    </p>

    <div class="quote center">
        <p>
            The Façade Pattern provides a unified interface to a set of interfaces in a subsystem. Façade defines a higher-level interface that makes the subsystem easier to use. (Gamma et al. 1995)
        </p>
    </div>
   
    <p>
        Let's look at what this means in practice. 
        In essence the basic purpose of the Façade Design Pattern is to offer a simplified, easy to use interface to a more complicated subsystem as illustrated below.
    </p>
    
    <img src="Images/simpleFacade.png" alt="Façade Example" title="A simple example of the Façade Pattern" class="center" style="width: 60%; height: 60%; "/>
    
    <p>    
        This differs in an important way from a very similar structural design pattern, 
        the Adapter Pattern, which aims to adapt interfaces to match the expectations of a client.
    </p>
    <p>
        As can be seen from the diagram a Façade also serves another important purpose, it decouples a clients reliance on a subsystem from the subsystem itself,
        provided that the client is coded to the Façade rather than the subsystem.
        This means that any alterations made to how the subsystem operates do not require changes be made to the client, just to the Façade.
    </p>
    
    <p>
        This decoupling between client and complex subsystem also helps reduce the number of objects which the client has to interact with,
        helping to adhere to the 'Principle of Least Knowledge' which is described more formally as the 'Law of Demeter'.
    </p>
    
    <div class="definition center">
        <p>
        Principle of Least Knowledge - talk only to your immediate friends. (Freeman et al. 2004)
        </p>
    </div>    
        
    <p>
        By reducing the dependencies which the client has to just the façade this ultimately the likely-hood of changes cascading through the system. 
        Which in turn makes software easier to maintain and more adaptable. 
    </p>
    <br>
</div>
<?php
include("Include/footer.html");
/*
 * End of file
 */ 