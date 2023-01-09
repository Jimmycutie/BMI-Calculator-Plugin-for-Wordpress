function getBmiValue()
{
    let weight = document.getElementById('weight').value;
    let height = document.getElementById('height').value;

    height = (height/100);

    let bmiValue = weight / (height*height);

    bmiValue = bmiValue.toFixed(1);

    document.getElementById('bmi-value').value = bmiValue;
}