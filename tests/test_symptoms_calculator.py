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
