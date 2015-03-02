<?php
include("Include/header.html");
include("Include/navigation.html");
?>
<div class ="mainContent">
    <H2>What is the Facade Design Pattern</H2>

    <p>The Facade Design Pattern is an example of a structural design pattern. These patterns aim to identify simple ways in which relationships between objects/entities in a system can be formed.
        In the case of the Facade Design Pattern the following is a formal definition:</p>

    <p>"The Facade Pattern provides a unified interface to a set of interfaces in a subsystem. Facade defines a higher-level interface that makes the subsystem easier to use" (Gamma et al. 1995)</p>

    <p>In essence the basic purpose of the Facade Design Pattern is to offer a simplified, easy to use interface to a more complicated subsystem. 
        This differs in an important way from a very similar structural design pattern, the Adapter Pattern, which aims to adapt interfaces to match the expectations of a client.
        A facade also serves another important purpose, it decouples clients reliant on a subsystem from the subsystem itself, provided that the client is coded to the facade rather than the subsystem.
        In practice this means that any alterations made to how the subsystem operates do not require changes be made to the client, just to the facade.</p>

    <p>The decoupling between client and complex subsystem also helps reduce the number of objects which the client has to interact with, helping to adhere to the 'Principle of Least Knowledge' or 'Law of demeter'.
        Essentially reducing the dependencies which the client has, to the facade rather than the potentially many classes in the subsystem, and thus the likely-hood of changes cascading through the system. This helps to
        improve software by making it easier to maintain and more adaptable. However it is important to keep in mind that this can lead to more wrapper classes being written which can increase time and space overheads, thus
        leading to a trade off between more coupling and inefficiency.</p>

    <hr/>

    <h4>References</h4>
    <h6>Gamma, E. et al. (1995) <i>Design Patterns: Elements of Reusable Object-Oriented Software</i> Boston: Addison-Wesley</h6>
    <h6>FREEMAN, E. et al. (2004) <i>Head First Design Patterns.</i> Sebastopol, Calif.: O'Reilly </h6>
    <h6>APPLETON, B. (?) <i>Introducing Demeter and its Laws</i> [Online] Available from: http://www.bradapp.com/docs/demeter-intro.html [Accessed: 27th February 2015]</h6>
    <h6>The Pragmatic Bookshelf (?) <i>Tell, Don't Ask</i> [Online] Available from: https://pragprog.com/articles/tell-dont-ask [Accessed: 27th February 2015]</h6>

</div>
<?php
include("Include/footer.html");
/*
 * End of file
 */