class symptomsCalculator:

    def acidBaseDisorder(self, minbicarbonate, maxbicarbonate):
        
        # For Metabolic Acidosis
        if (minbicarbonate < 18.0):
            a = True
        else:
            a = False
        
        #For Metabolic Alkalosis
        if (maxbicarbonate > 30.0):
            b = True
        else:
            b = False
        
        return a, b
    
    def hyperCholesterolemia(self, maxcholestrol):
        if (maxcholestrol > 200):
            return True
        else:
            return False
    
    def hypertension(self, sbp, dbp):
        if (sbp > 140) and (dbp > 90):
            return True
        else:
            return False
    
    def kidneyInjury(self, maxCreatinine, prevMaxCreatinine):
        
        # For Acute
        if (((maxCreatinine) > (1.5 * prevMaxCreatinine)) or ((maxCreatinine > 1.2) and (prevMaxCreatinine <= 1.2))):
            a = True
        else:
            a = False
        
        #For Chronic
        if ((maxCreatinine > 1.2) and (prevMaxCreatinine > 1.2)):
            b = True
        else:
            b = False
        
        #For Acute on Chronic
        if ((maxCreatinine > 1.2) and (prevMaxCreatinine > 1.2) and ((maxCreatinine) > (1.5 * prevMaxCreatinine))):
            c = True
        else:
            c = False
        
        #For Not otherwise specified
        if (maxCreatinine > 1.2):
            d = True
        else:
            d = False
            
        return a, b, c, d
        
    def obesity(self, height, weight):
        if (height > 0) and (weight > 0):
            bmi = (weight)/((height/100)*(height/100))
        
        if bmi > 30:
            return True
        else:
            return False