
import {useState} from 'react';
import './gcd.css'
export default function Gcd(props) {
  const [Number1, setNumber1] = useState('');
  const [Number2, setNumber2] = useState('');
  const [ans,setans]=useState(0);
  const [ans1,setans1]=useState(0);


  const eventchange2 = (event) => {
    setNumber1(event.target.value);
  }
  const eventchange3 = (event) => {
    setNumber2(event.target.value);
  }

  const click101=()=>{
   
    let hcf,i=1;
    
    while( i <= Number1 && i <= Number2){
    
      if( Number1 % i == 0 && Number2 % i == 0) {
          hcf = i;
      }
      i++;
  }
    setans(hcf);
   let ans1=(Number1*Number2)/(hcf);
   setans1(ans1);

  }
 
  
  return (

      
    
      <div>
      <div className='hom'>
       <h4>What is the Greatest Common Divisor?</h4>
       <p>The greatest common divisor, which is also commonly referred to as the highest common factor, greatest common factor, or highest common divisor, is the largest positive integer of a given set of numbers that can divide all the numbers within that set without any remainder. Essentially, it is the largest multiple of the numbers within the set.

The GCD is frequently calculated for two numbers as a means of reducing fractions to their lowest terms. If the GCD of two numbers is 1, they are described as relatively prime or coprime.
</p>
</div>


<div className='hom'>
       <h4>What is the Least Common Multiple?</h4>
       <p>As the name indicates, the least common multiple of a group of integer numbers is the smallest multiple of the numbers within the set. Before subtracting or adding fractions that have different denominators, it can be useful to convert all fractions such that the denominator is the LCM of all the denominators. In this event, the LCM is the lowest common denominator (LCD).

</p>
</div>
<h4>Relation : </h4> <h6>gcd(a,b)=(a*b)/lcm(a,b)</h6>
<div className='sky'></div>


<div className='gcd'>
<div className='lcm'>
<h6>ENTER 1st NUMBER</h6>
 <input value={Number1} onChange={eventchange2} ></input>
 </div>

 <div className='lcm'>
 <h6>ENTER 2nd NUMBER</h6>
 <input value={Number2} onChange={eventchange3}></input>

 
    </div>
    <div>    <button type="button1" className="btn btn mx-2 my-3" onClick={click101}  >CALCULATE</button>
</div>

    </div>
   
   

      <div className='blue'>
        <div className='blue1'> <h5>GCD</h5><input value={ans}></input></div>
        
        <div className='blue1'><h5>LCM</h5><input value={ans1}></input></div>
      </div>

     <div className='brute'>
     <h5 >An example of a GCD and LCM Calculation</h5>
      <p>Let's say you want to calculate the GCD and LCM of two numbers: 12 and 28.</p>

      <p>First, determine the prime factorizations of 12 = 2 × 2 × 3 and 28 = 2 × 2 × 7.</p>

      <p>The GCD is the string that is present in both sets of factorizations, i.e., 2 × 2 = 4.</p>

      <p>The LCM is the greatest power of all exponents; i.e., 2 × 2 × 3 × 7 = 84.</p>

     
      </div>


      </div>
  )
}
