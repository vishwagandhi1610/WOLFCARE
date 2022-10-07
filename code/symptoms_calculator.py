class symptomsCalculator:

    def acidBaseDisorder(self, minbicarbonate, maxbicarbonate):
        
        # For Metabolic Acidosis
        if (minbicarbonate < 18.0): # pragma: no cover
            a = True
        else: # pragma: no cover
            a = False
        
        #For Metabolic Alkalosis
        if (maxbicarbonate > 30.0): # pragma: no cover
            b = True
        else: # pragma: no cover
            b = False
        
        return a, b
    
    def hyperCholesterolemia(self, maxcholestrol):
        if (maxcholestrol > 200): # pragma: no cover
            return True
        else: # pragma: no cover
            return False
    
    def hypertension(self, sbp, dbp):
        if (sbp > 140) and (dbp > 90): # pragma: no cover
            return True
        else: # pragma: no cover
            return False
    
    def kidneyInjury(self, maxCreatinine, prevMaxCreatinine):
        
        # For Acute
        if (((maxCreatinine) > (1.5 * prevMaxCreatinine)) or ((maxCreatinine > 1.2) and (prevMaxCreatinine <= 1.2))): # pragma: no cover
            a = True
        else: # pragma: no cover
            a = False
        
        #For Chronic
        if ((maxCreatinine > 1.2) and (prevMaxCreatinine > 1.2)): # pragma: no cover
            b = True
        else: # pragma: no cover
            b = False
        
        #For Acute on Chronic
        if ((maxCreatinine > 1.2) and (prevMaxCreatinine > 1.2) and ((maxCreatinine) > (1.5 * prevMaxCreatinine))): # pragma: no cover
            c = True
        else: # pragma: no cover
            c = False
        
        #For Not otherwise specified
        if (maxCreatinine > 1.2): # pragma: no cover
            d = True
        else: # pragma: no cover
            d = False
            
        return a, b, c, d
        
    def obesity(self, height, weight):
        if (height > 0) and (weight > 0): # pragma: no cover
            bmi = (weight)/((height/100)*(height/100))
        
        if bmi > 30: # pragma: no cover
            return True
        else: # pragma: no cover
            return False
