import sys
sys.path.append("../code/")

import pytest
import unittest

import symptoms_calculator

a = symptoms_calculator.symptomsCalculator()

class testReturnValues(unittest.TestCase):
    
    def test_acidBaseDisorder(self):
        temp1, temp2 = a.acidBaseDisorder(15, 31)
        self.assertEqual(temp1, True) and self.assertEqual(temp2, False)
    
    def test_hyperCholesterolemia(self):
        temp = a.hyperCholesterolemia(160)
        self.assertEqual(temp, False)
    
    def test_hypertension(self):
        temp = a.hypertension(145, 95)
        self.assertEqual(temp, True)
    
    def test_kidneyInjury(self):
        temp1, temp2, temp3, temp4 = a.kidneyInjury(1.5, 1.1)
        if ((temp1 == True) and (temp2 == False) and (temp3 == False) and (temp4 == True)):
            temp = True
        else:
            temp = False
        self.assertEqual(temp, True)
    
    def test_obesity(self):
        temp = a.obesity(180, 72)
        self.assertEqual(temp, False)