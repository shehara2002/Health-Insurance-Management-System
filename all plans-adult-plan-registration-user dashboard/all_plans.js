function showPlanDetails(plan) {

    switch (plan) {
      case 'Emergency Plan':
        alert('Emergency Plan: Provides essential emergency services coverage only.');
        break;
      case 'Complete Coverage':
        alert('Complete Coverage: Full health coverage including hospitalization and outpatient services.');
        break;
      case 'Family Plan':
        alert( 'Family Plan: Designed for families, covering all family members under one policy.');
        break;
      case 'Adult Plan':
        alert('Adult Plan: Tailored for adults with comprehensive coverage.');
        break;
    }
    
  }
  
  function changeBackgroundColor()
  {
    document.querySelector('.btn1').style.backgroundColor = 'blue';
  }

  function goToPage(page) {
    window.location.href = page;
}