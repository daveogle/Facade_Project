<?php
include("Include/header.html");
include("Include/navigation.html");
?>
<div class ="mainContent">
    <H2>Real World Examples</H2>    

    <p>
        Façades are all around us in the real world.  Operating systems are one such example - you don't see all the inner workings of your computer, 
        but the OS provides a simplified interface to use the machine. Buildings also have a façade - the exterior of the building. 
        Wikipedia gives us a nice link between software architecture and standard architecture:
    </p>

    <blockquote>
        <div class="quote center">
            <p>
                In architecture, the façade of a building is often the most important from a design standpoint, as it sets the tone for the rest of the building.
            </p>
        </div>
    </blockquote>
    
    <p>
        Lets have a look at couple of real world examples. Take a car, starting a car involves many complicated steps. 
        Imagine how it would be if you had to adjust a number of valves and various controllers. 
        The façade you have got is just the ignition key. On turn of a key it sends an instruction to multiple subsystems, 
        executes a sequence of operations and completes the task. All you know is a key turn which acts as a façade and simplifies your job.
    </p>
    
    <p>
        Similarly consider microwave oven, it consists of components like transformer, capacitor, magnetron, waveguide and others. 
        To perform an operation these different components needs to be activated in a certain sequence. 
        Every component has different inputs and outputs. 
        Imagine you will have separate external controller for all these components using which you will heat the food. 
        It will be complicated and cumbersome.
    </p>
    
    <p>
        In this scenario, oven provides you with preprogrammed switches which can be considered as a façade. 
        On a click on of a single switch the job gets done. That single menu switch works as an abstraction layer between you and the internal components.
    </p>
    
    <p>
	Lets consider another example. Imagine you want to organize a marriage reception. You need to do the following:
    </p>
    <ul>
        <li>decorate the hall where the event is planned</li>
        <li>music band to play some music</li>
        <li>organize dinner for say 100 people</li>
        <li>snack in the evening for around 50 people</li>
    </ul>
    
    <p>
        If you wanted to organize such an event some 10 years back, you wanted to go to a caterer for food, 
        a musical troop for music, and organize flowers and people to decorate them, and so on.
    </p>

    <p>
	Some twenty years back, we needed to go to the fish market, the meat shop, the vegetable market etc., 
        for the raw materials for the food and then organize a cook so that you have everything ready for the event.
    </p>
    
    <p>
	Now, life is really simpler with event managers. You just need to walk to an event manager and tell him that you need a hall decorated with flowers, 
        dinner for 100 people, snacks for 50 people, and need a good music troop to play music while the reception is going on. 
        You don't need to worry about anything, and they will take care of the rest.
    </p>

    <p>
        This is a typical example for Façade. You don’t need to interact with many different objects for each and every activity. 
        You will be provided a single interface which will act as a façade for many activities. This makes the life of clients much simpler.
    </p>     

    <p>
        Other examples for Façade are one stop bill payment shops, a support desk in a big organization which takes all kinds of support requests etc.
    </p>
    
    <p>
        Lets look at another real world example, this time with the code:
    </p>

    <p>
	In this example we need to start computer. <strong>Computer</strong> class acts as facade which encapsulates other complex classes represented by: 
        <strong>HardDrive</strong> class, <strong>Memory</strong> class and <strong>CPU</strong> class. 
        Each of this classes has operations which must be performed when <em>Start()</em> method of <strong>Computer</strong> class is called.
    </p>

    <div class ="codeBox">
        <pre class="brush: java">
        public class Computer
        {
            private readonly CPU _cpu;
            private readonly HardDrive _hardDrive;
            private readonly Memory _memory;

            private const long BootAddress = 1;
            private const long BootSector = 1;
            private const int SectorSize = 10;

            public Computer()
            {
                _cpu = new CPU();
                _hardDrive = new HardDrive();
                _memory = new Memory();
            }

            public void Start()
            {
                _cpu.Freeze();
                _memory.Load(BootAddress, _hardDrive.Read(BootSector, SectorSize));
                _cpu.Jump(BootAddress);
                _cpu.Execute();
            }
        }

        public class CPU
        {
            public void Freeze()
            {
                Console.WriteLine("CPU is frozen");
            }

            public void Jump(long position)
            {
                Console.WriteLine("Jumping to position: {0}", position);
            }

            public void Execute()
            {
                Console.WriteLine("Executing...");
            }
        }

        public class HardDrive
        {

                public byte[] Read(long lba, int size)
                {
                    var bytes = new byte[size];
                    var random = new Random();
                    random.NextBytes(bytes);
                    return bytes;
                }
        }

        public class Memory
        {
            public void Load(long position, byte[] data)
            {
                Console.WriteLine("Loading data: ");
                foreach (var b in data)
                {
                    Console.Write(b+ " ");
                    Thread.Sleep(1000);
                }

                Console.WriteLine("\nLoading compleded");
            }
        }

        public class Program
        {
            static void Main()
            {
                var computer = new Computer();
                computer.Start();
            }
        }
        </pre>
        <h3>Examples in game development</h3>
        <h4>Tic-Tac-Toe</h4>
        <p>When a player wants to make a move it must tell:
        <ul>
            <li>the “board” to make such a move</li>
            <li>the “control manager” to set up for next turn (halt the game, skip a turn, change players)</li> 
            <li>The “view administrator” to announce the winner, loser, or draw if the game is over</li>
        </ul>
To avoid this complication, player interacts with a single interface IGame (the façade)</p>
        <div class ="codeBox">
            <pre class="brush: java">
            public abstract class APlayer {
	protected IGame game;
	public APlayer(IGame g, …){
		this.game = g;
		…
	}
}
public class ComputerPlayer extends APlayer {
	…
	public void takeTurn() {
		…
		getGame().takePosition(p.x, p.y, this, …);
	}
}</pre></div>
    <p>Another example may be a Graphical User Interface that calls many other classes to display something like message box:
</p>
<div class ="codeBox">
    <pre class="brush: java">// GraphicsInterface acts as façade for hiding
// the detailed operations involved in creating
// a messagebox.
GraphicsInterface::displayMsgBox("CoolTexture",
"Roman.fnt", "Hello World");</pre></div>
    
    </div>
 
<!-- Finally, to actually run the highlighter, you need to include this JS on your page -->
<script type="text/javascript">
     SyntaxHighlighter.all()
</script>
<?php
include("Include/footer.html");
/*
 * End of file
 */