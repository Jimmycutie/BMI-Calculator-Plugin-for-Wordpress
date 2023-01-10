function getBmiValue()
{
    let weight = document.getElementById('weight').value;
    let height = document.getElementById('height').value;
    let statement = document.getElementById("result-statement");

    height = (height/100);

    let bmiValue = weight / (height*height);

    bmiValue = bmiValue.toFixed(1);
    document.getElementById('bmi-value').value = bmiValue;

    if(bmiValue < 18){
        statement.innerText = "Your BMI falls within the underweight range";    
    }
    else if((bmiValue >= 18) && (bmiValue <= 24.9)){
        statement.innerText = "Your BMI falls within the healthy weight range";
    }
    else if((bmiValue >= 25) && (bmiValue <= 29.9 )){
        statement.innerText = "Your BMI falls within the overweight range";
    }
    else{
        statement.innerText = "Your BMI falls within the obese range";
    }

}