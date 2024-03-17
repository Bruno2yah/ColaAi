import React, { useState } from 'react';
import { View, Text, TouchableOpacity, StyleSheet, TextInput, ImageBackground } from 'react-native';
import * as Animado from 'react-native-animatable';

export default function Nome({ navigation }) {
  const [cnpj, setCnpj] = useState('');

  const formatCnpj = (text) => {
    // Remove non-numeric characters
    const numericOnly = text.replace(/\D/g, '');

    // Format CNPJ: 11.222.333/0001-44
    const formattedCnpj = numericOnly.replace(
      /^(\d{2})(\d{3})(\d{3})(\d{4})(\d{2})$/,
      '$1.$2.$3/$4-$5'
    );

    // Update the state with the formatted CNPJ
    setCnpj(formattedCnpj);
  };

  return (
    <View style={styles.container}>
       <ImageBackground
            source={require('../../../../../../../assets/img/cadastro/login/superiorDireita.png')}
            style={styles.superiorDireito}
          />
      <View style={styles.contentContainer}>
        <View style={styles.text}>
        <Animado.Text style={styles.title} animation="zoomIn" duration={800}>Qual é o CNPJ da organização?</Animado.Text>
        </View>
        <TextInput
          style={styles.input}
          placeholder="Digite o CNPJ da organização"
          value={cnpj}
          onChangeText={(text) => formatCnpj(text)}
          maxLength={18} 

        />
        <View style={styles.buttonColumn}>
          <TouchableOpacity style={styles.button2}>
            <Text style={styles.buttonText2} onPress={() => navigation.navigate('Nome')}>
              Prosseguir
            </Text>
          </TouchableOpacity>
        </View>
      </View>
      <ImageBackground
        style={styles.inferiorDireito}
        source={require('../../../../../../../assets/img/cadastro/login/inferiorDireito.png')}
      />
    </View>
  );
}


const styles = StyleSheet.create({
  container: {
    flex: 1,
    justifyContent: "center",
    alignItems: "flex-start",
    backgroundColor: "white",
    height: '100%',
    width: '100%',
    padding: 10,
    
  },
  contentContainer: {
    flex: 1,
    justifyContent: 'center',
    alignItems: 'center',
    width: '100%',
    bottom: 80
  },
  text:{
    width: '100%',
    alignItems: "flex-start",
    right: -20,
  },
  title: {
    fontSize: 30,
    fontWeight: "bold",
    marginBottom: 10,
    textAlign: "left",


  },
  description: {
    marginBottom: 20,
    textAlign:"left",
    fontSize: 16,
  },
  buttonText1: {
    fontSize: 22,
    color: '##FABDC1',
    textAlign: 'center',
  },
  button1: {
    backgroundColor: '#6D9EAF',
    padding: 10,
    margin: 10,
    borderRadius: 10,
    width: 300,
    height: 50,
  },
  buttonText2: {
    fontSize: 22,
    color: "#6D9EAF",
    textAlign: "center",
  },
  button2: {
    backgroundColor: "#FABDC1",
    padding: 10,
    margin: 10,
    borderRadius: 10,
    width: 170,
    height: 50,
  },
  buttonColumn: {
    width:'100%',
    height: 50,
    alignItems:"flex-end"
  },
  input: {
    borderBottomWidth: 1,
    borderBottomColor: '#aaa',
    fontSize: 16,
    marginBottom: 20,
    width: '90%',
    height: 50,
  },
  inferiorDireito: {
    position: 'absolute',
    resizeMode: 'contain',
    bottom: 50,
    right: 0,
    width: 200,
    height: 200,
  },
  superiorDireito: {
    position: 'absolute',
    resizeMode: 'contain',
    top: 0,
    right: -10,
    width: 140,
    height: 140,
  },

  });


