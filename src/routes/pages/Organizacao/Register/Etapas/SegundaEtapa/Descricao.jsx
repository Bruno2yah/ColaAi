import React, { useState } from 'react';
import { View, Text, TouchableOpacity, StyleSheet, TextInput, ImageBackground } from 'react-native';

export default function Descricao({ navigation }) {
  const [textValue, setTextValue] = useState('');

  return (
    <View style={styles.container}>
      <ImageBackground
            source={require('../../../../../../../assets/img/cadastro/login/superiorDireita.png')}
            style={styles.superiorDireito}
          />
      <View style={styles.contentContainer}>
      <View style={styles.text}>
        <Text style={styles.title}>Adicione uma breve descrição sobre a sua organização?</Text>
      </View>
      <TextInput
        style={styles.textArea}
        multiline={true}
        numberOfLines={4}
        placeholder=" "
        value={textValue}
        onChangeText={(text) => setTextValue(text)}
      />
      <View style={styles.buttonColumn}>
        <TouchableOpacity style={styles.button2} onPress={() => navigation.navigate('Link')}>
          <Text style={styles.buttonText2}>Prosseguir</Text>
        </TouchableOpacity>
      </View>
      <View style={styles.buttonPular}>
        <TouchableOpacity onPress={() => navigation.navigate('TelaFinal2')}>
          <Text style={styles.linkText}>adicionar mais tarde</Text>
        </TouchableOpacity>
      </View>
      </View>
      <ImageBackground
        style={styles.inferiorEsquerdo}
        source={require('../../../../../../../assets/img/cadastro/login/InferiorEsquerda.png')}
        />
    </View>
  );
}


const styles = StyleSheet.create({
  container: {
    flex: 1,
    justifyContent: 'center',
    alignItems: 'center',
    backgroundColor: 'white',
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
    fontSize: 24,
    fontWeight: 'bold',
    marginBottom: 10,
    textAlign: 'left',
  },
  description: {
    marginBottom: 20,
    textAlign: 'left',
    fontSize: 16,
  },
  textArea: {
    width: '100%',
    height: '20%',
    borderColor: 'gray',
    borderWidth: 1,
    borderRadius: 10,
    padding: 10,
    marginBottom: 20,
    width:'95%'
  },
  buttonText2: {
    fontSize: 22,
    color: '#6D9EAF',
    textAlign: 'center',
  },
  button2: {
    backgroundColor: '#FABDC1',
    padding: 10,
    margin: 10,
    borderRadius: 10,
    width: 170,
    height: 50,
  },
  linkText: {
    fontSize: 20,
    color: 'blue',
    marginTop: 10,
    bottom:10,
    left:10
  },
  buttonPular: {
    justifyContent: 'flex-end',
    alignItems: 'center',
    width: '100%',
    height: '100%',
    position: 'absolute',
    bottom: 20,
  },
  buttonColumn: {
    width:'100%',
    height: 50,
    alignItems:"flex-end"
  },
  superiorDireito: {
    position: 'absolute',
    resizeMode: 'contain',
    top: 0,
    right: -10,
    width: 140,
    height: 140,
  },
  inferiorEsquerdo: {
    position: 'absolute',
    resizeMode: 'contain',
    bottom: 100,
    left: -20,
    width: 200,
    height: 200,
  },
});