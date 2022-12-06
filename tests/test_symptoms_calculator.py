# test file
import sys
sys.path.append("../code/")

import pytest
import unittest

import symptoms_calculator

a = symptoms_calculator.symptomsCalculator()

class testReturnValues(unittest.TestCase):
    
    def test_acidBaseDisorder(self):
        temp1, temp2 = a.acidBaseDisorder(15, 31) # pragma: no cover
        self.assertEqual(temp1, True) and self.assertEqual(temp2, False)
        
    def test_kidneyInjury(self):
        temp1, temp2, temp3, temp4 = a.kidneyInjury(1.5, 1.1) # pragma: no cover
        if ((temp1 == True) and (temp2 == False) and (temp3 == False) and (temp4 == True)): # pragma: no cover
            temp = True
        else: # pragma: no cover
            temp = False
        self.assertEqual(temp, True) # pragma: no cover
