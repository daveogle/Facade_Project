<?php
include("Include/header.html");
include("Include/navigation.html");
?>
<div class ="mainContent">
    <H2>Variations</H2>
    <p>Most of the time the Façade pattern is used in order to create a simpler interface for connecting to a more complex sub-system,    
    however there are some variations which can be applied to the Façade Pattern, let's take a look at some of these variations now.</p>
      
    <div class="table-wrapper" id="variationsTable">
        <table>
            <tr>
                <td><strong> Reduction:</strong></td>
                <td>The Façade pattern can be useful in reducing the number of classes the client application communicates with. Fewer dependencies between client and system
                    mean more flexible development of the system and make it easier to change the functionality of the sub-system without the need to make changes in the client.</td>
            </tr>
            <tr>
                <td><strong> Supplement:</strong></td>
                <td>Another variation of Façade pattern is the supplementation of existing functions with new routines, this is more of an addition to the traditional use of Façade. 
                    *-->The Façade class still stores the subset of the class (number of methods) <--* {What does this mean?} but it also contains some additional new functionality, usually based on the subset stored.
                  <img src="Images/SupplementEx.png" alt="Suppliment Example" class="center" style="width: 60%; height: 60%; "/></td>
            </tr>
            <tr>
                <td><strong> Encapsulation:</strong></td>
                <td>
                    In this variation the Façade pattern is used to encapsulate or hide the system. In this case the system is linked to façade class, but not represented to user. All methods are private to any client but not to façade.
                    Therefore the client is forced to use the Façade Class to access the system.
                    Encapsulating the sub-system in this way can provide a number of benefits:
                    <ol>
                    <li> Track system usage</li>
                    <p>Because all the access to system goes through Façade, we can easily track usage of the system through this single point of entry providing lots of useful data.</p>
                    <li> Swapping out systems</li>
                    <p>At some point in the software's life-cycle it may become necessary to swap out the existing sub-system for a new one, in this case the Façade pattern can be very useful. 
                          When the sub-system is changed for a new one, the only class that needs to be modified will be the Façade class,
                        whereas when this design pattern is not used you would have to change the code of all client classes that interact with the sub-system.</p>
                        <img src="Images/SystemSwapEx.png" alt="System Swap Example" class="center" style="width: 60%; height: 60%; "/>
                    </ol>
                </td>
            </tr>
            <tr>
                <td><strong> Privacy:</strong></td>
                <td>One of the main uses of Façade pattern is hiding details that are not supposed to be revealed. Façade class only contains classes and variables that client can use, effectively hiding other ones.
                Let's consider an an example of this use-case: Suppose a system has different clients that use system in different ways. In this case separate façade classes are created for each client and contain only the methods that each specific client can use. 
                It's clear to see that if each client can only communicate with the system using Façade class and does not have other way to access a system then we can easily limit access to the sub-system to only the functionality that is required by an individual client.
                <img src="Images/PrivacyExample.png" alt="Privacy Example" class="center" style="width: 60%; height: 60%; "/>             
            </td>
            </tr>
        </table>
		
 <h4>References</h4>
    <h6>BISHOP, J. et al. (2007) <i>C# 3.0 Design Patterns: Use the Power of C# 3.0 to Solve Real-World Problems</i> O'Reilly Media</h6>
    <h6>Best Practice Software Engineering (?) <i>Facade Pattern</i> [Online] http://best-practice-software-engineering.ifs.tuwien.ac.at/patterns/facade.html [Accessed: 1st March 2015]</h6>
</div>
<?php
include("Include/footer.html");
/*
 * End of file
 */