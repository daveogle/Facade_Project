<?php
include("Include/header.html");
include("Include/navigation.html");
?>
<div class ="mainContent">
    <H2>Examples</H2>
    <p>Some real world examples of the Facade Design Pattern</p>
    

<div>
	<div>
		Facades are all around us in the real world. &nbsp;Operating systems are one such example - you don&#39;t see all the inner workings of your computer, but the OS provides a simplified interface to use the machine. Buildings also have a facade - the exterior of the building. Wikipedia gives us a nice link between software architecture and standard architecture:</div>
	<div>
		&nbsp;</div>
	<blockquote>
		<div>
			<em style="margin: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 15px; font-family: ProximaNova-Reg; vertical-align: baseline; line-height: 22.5px;">In architecture, the facade of a building is often the most important from a design standpoint, as it sets the tone for the rest of the building</em></div>
	</blockquote>
</div>
<div>
	&nbsp;</div>
<div>
	Lets have a look at couple of real world examples. Take a car, starting a car involves many complicated steps. Imagine how it would be if you had to adjust a number of valves and various controllers. The facade you have got is just the ignition key. On turn of a key it sends an instruction to multiple subsystems, executes a sequence of operations and completes the task. All you know is a key turn which acts as a facade and simplifies your job.</div>
<div>
	&nbsp;</div>
<div>
	&nbsp;</div>
<div>
	Similarly consider microwave oven, it consists of components like trasnformer, capacitor, magnetron, waveguide and others. To perform an operation these different components needs to be activated in a certain sequence. Every component has different inputs and outputs. Imagine you will have separate external controller for all these components using which you will heat the food. It will be complicated and cumbersome.</div>
<div>
	&nbsp;</div>
<div>
	In this scenario, oven provides you with preprogrammed switches which can be considered as a facade. On a click on of a single switch the job gets done. That single menu switch works as an abstraction layer between you and the internal components.</div>
<div>
	&nbsp;</div>
<div>
	Lets consider another example. Imagine you want to organize a marriage reception. You need to do the following:</div>
<ul>
<li>decorate the hall where the event is planned&nbsp;</li>
<li>music band to play some music</li>
<li>organize dinner for say 100 people</li>
<li>snack in the evening for around 50 people</li>
</ul>
<div>
	If you wanted to organize such an event some 10 years back, you wanted to go to a caterer for food, a musical troop for music, and organize flowers and people to decorate them, and so on.</div>
<div>
	&nbsp;</div>
<div>
	Some twenty years back, we needed to go to the fish market, the meat shop, the vegetable market etc., for the raw materials for the food and then organize a cook so that you have everything ready for the event.</div>
<div>
	&nbsp;</div>
<div>
	Now, life is really simpler with event managers. You just need to walk to an event manager and tell him that you need a hall decorated with flowers, dinner for 100 people, snacks for 50 people, and need a good music troop to play music while the reception is going on. You don&rsquo;t need to worry about anything, and they will take care of the rest.</div>
<div>
	&nbsp;</div>
<div>
	This is a typical example for Fa&ccedil;ade. You don&rsquo;t need to interact with many different objects for each and every activity. You will be provided a single interface which will act as a fa&ccedil;ade for many activities. This makes the life of clients much simpler.</div>
<div>
	&nbsp;</div>
<div>
	Other examples for Fa&ccedil;ade are one stop bill payment shops, a support desk in a big organization which takes all kinds of support requests etc.</div>
<div>
	&nbsp;</div>
<div>
	Lets look at another real world example, this time with the code:</div>
<div>
	&nbsp;</div>
<div>
	In this example we need to start computer. <strong>Computer</strong> class acts as facade which encapsulates other complex classes represented by: <strong>HardDrive</strong> class, <strong>Memory</strong> class and <strong>CPU</strong> class. Each of this classes has operations which must be performed when <em>Start()</em> method of <strong>Computer</strong> class is called.</div>
<div>
	&nbsp;</div>
<pre>
<span _fck_bookmark="1" style="display: none;"> </span></pre>
<div>
	<pre>
	public class Computer</pre>
</div>
<div>
	&nbsp; &nbsp; {</div>
<div>
	&nbsp; &nbsp; &nbsp; &nbsp; private readonly CPU _cpu;</div>
<div>
	&nbsp; &nbsp; &nbsp; &nbsp; private readonly HardDrive _hardDrive;</div>
<div>
	&nbsp; &nbsp; &nbsp; &nbsp; private readonly Memory _memory;</div>
<div>
	&nbsp;</div>
<div>
	&nbsp; &nbsp; &nbsp; &nbsp; private const long BootAddress = 1;</div>
<div>
	&nbsp; &nbsp; &nbsp; &nbsp; private const long BootSector = 1;</div>
<div>
	&nbsp; &nbsp; &nbsp; &nbsp; private const int SectorSize = 10;</div>
<div>
	&nbsp;</div>
<div>
	&nbsp; &nbsp; &nbsp; &nbsp; public Computer()</div>
<div>
	&nbsp; &nbsp; &nbsp; &nbsp; {</div>
<div>
	&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; _cpu = new CPU();</div>
<div>
	&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; _hardDrive = new HardDrive();</div>
<div>
	&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; _memory = new Memory();</div>
<div>
	&nbsp; &nbsp; &nbsp; &nbsp; }</div>
<div>
	&nbsp;</div>
<div>
	&nbsp; &nbsp; &nbsp; &nbsp; public void Start()</div>
<div>
	&nbsp; &nbsp; &nbsp; &nbsp; {</div>
<div>
	&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; _cpu.Freeze();</div>
<div>
	&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; _memory.Load(BootAddress, _hardDrive.Read(BootSector, SectorSize));</div>
<div>
	&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; _cpu.Jump(BootAddress);</div>
<div>
	&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; _cpu.Execute();</div>
<div>
	&nbsp; &nbsp; &nbsp; &nbsp; }</div>
<div>
	&nbsp; &nbsp; }</div>
<div>
	&nbsp;</div>
<div>
	&nbsp; &nbsp; public class CPU</div>
<div>
	&nbsp; &nbsp; {</div>
<div>
	&nbsp; &nbsp; &nbsp; &nbsp; public void Freeze()</div>
<div>
	&nbsp; &nbsp; &nbsp; &nbsp; {</div>
<div>
	&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Console.WriteLine(&quot;CPU is frozen&quot;);</div>
<div>
	&nbsp; &nbsp; &nbsp; &nbsp; }</div>
<div>
	&nbsp;</div>
<div>
	&nbsp; &nbsp; &nbsp; &nbsp; public void Jump(long position)</div>
<div>
	&nbsp; &nbsp; &nbsp; &nbsp; {</div>
<div>
	&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Console.WriteLine(&quot;Jumping to position: {0}&quot;, position);</div>
<div>
	&nbsp; &nbsp; &nbsp; &nbsp; }</div>
<div>
	&nbsp;</div>
<div>
	&nbsp; &nbsp; &nbsp; &nbsp; public void Execute()</div>
<div>
	&nbsp; &nbsp; &nbsp; &nbsp; {</div>
<div>
	&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Console.WriteLine(&quot;Executing...&quot;);</div>
<div>
	&nbsp; &nbsp; &nbsp; &nbsp; }</div>
<div>
	&nbsp; &nbsp; }</div>
<div>
	&nbsp;</div>
<div>
	&nbsp; &nbsp; public class HardDrive</div>
<div>
	&nbsp; &nbsp; {</div>
<div>
	&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</div>
<div>
	&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; public byte[] Read(long lba, int size)</div>
<div>
	&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; {</div>
<div>
	&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; var bytes = new byte[size];</div>
<div>
	&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; var random = new Random();</div>
<div>
	&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; random.NextBytes(bytes);</div>
<div>
	&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; return bytes;</div>
<div>
	&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; }</div>
<div>
	&nbsp; &nbsp; }</div>
<div>
	&nbsp;</div>
<div>
	&nbsp; &nbsp; public class Memory</div>
<div>
	&nbsp; &nbsp; {</div>
<div>
	&nbsp; &nbsp; &nbsp; &nbsp; public void Load(long position, byte[] data)</div>
<div>
	&nbsp; &nbsp; &nbsp; &nbsp; {</div>
<div>
	&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Console.WriteLine(&quot;Loading data: &quot;);</div>
<div>
	&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; foreach (var b in data)</div>
<div>
	&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; {</div>
<div>
	&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Console.Write(b+ &quot; &quot;);</div>
<div>
	&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Thread.Sleep(1000);</div>
<div>
	&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; }</div>
<div>
	&nbsp;</div>
<div>
	&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Console.WriteLine(&quot;\nLoading compleded&quot;);</div>
<div>
	&nbsp; &nbsp; &nbsp; &nbsp; }</div>
<div>
	&nbsp; &nbsp; }</div>
<div>
	&nbsp;</div>
<div>
	&nbsp; &nbsp; class Program</div>
<div>
	&nbsp; &nbsp; {</div>
<div>
	&nbsp; &nbsp; &nbsp; &nbsp; static void Main()</div>
<div>
	&nbsp; &nbsp; &nbsp; &nbsp; {</div>
<div>
	&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; var computer = new Computer();</div>
<div>
	&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; computer.Start();</div>
<div>
	&nbsp; &nbsp; &nbsp; &nbsp; }</div>
<div>
	&nbsp; &nbsp; }</div>

</div>
<?php
include("Include/footer.html");
/*
 * End of file
 */