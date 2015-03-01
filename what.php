<?php
include("Include/header.html");
include("Include/navigation.html");
?>
<div class ="mainContent">
    <H2>What</H2>
    <p>What is the Facade Design Pattern</p>
    <p>"The Facade Pattern provides a unified interface to a set of interfaces in a subsystem. Facade defines a higher-level interface that makes the subsystem easier to use" (Freeman et al. 2004)</p>
        
    <p>In essence the basic purpose of the Facade Design Pattern is to offer a simplified easy to use interface to a more complicated subsystem. 
       This differs in an important way from a very similar design pattern, the Adapter Pattern, which aims to adapt interfaces to match the expectations of a client.
       A facade also serves another important purpose, it decouples clients reliant on a subsystem from the subsystem itself, provided that the client is coded to the facade rather than the subsystem.
       In practice this means that any alterations made to how the subsystem operates does not require changes be made to the client just to the facade.</p>
       
</div>
<?php
include("Include/footer.html");
/*
 * End of file
 */