//npx expo install expo-image-picker

import React, { useState } from 'react';
import { View, Text, Pressable, StyleSheet, Image } from 'react-native';
import * as ImagePicker from 'expo-image-picker';

export default function Foto({ navigation }) {
  const [image, setImage] = useState(null);

  const pickImage = async () => {
    let result = await ImagePicker.launchImageLibraryAsync({
      mediaTypes: ImagePicker.MediaTypeOptions.All,
      allowsEditing: true,
      aspect: [5, 5],
      quality: 1,
    });

    if (!result.cancelled) {
      setImage(result.assets[0].uri);
    }
  };

  return (
    <View style={styles.container}>
      <Text style={styles.title}>Adicione uma foto ao perfil</Text>
      <Text style={styles.description}>
        A imagem ficará visível para os perfis de organizações e administradores do Cola Aí.
      </Text>
      {image && <Image source={{ uri: image }} style={styles.image} />}
      {!image && (
        <Pressable style={styles.imageButton} onPress={pickImage}>
          <Image source={require('../../../../../../../assets/img/adicionarFoto.png')} style={styles.icon} />
        </Pressable>
      )}
        <Pressable style={styles.button2} onPress={() => navigation.navigate('Banner')}>
            <Text style={styles.buttonText2}>Prosseguir</Text>
        </Pressable>
        <View style={styles.buttonPular}>
          <Pressable onPress={() => navigation.navigate('TelaFinal2')}>
            <Text style={styles.linkText}>adicionar mais tarde</Text>
          </Pressable>
        </View>
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
    fontSize: 16,
    color: 'blue',
    marginTop: 10,
  },
  image: {
    width: 200,
    height: 200,
    borderRadius: 10,
    marginBottom: 10,
  },
  imageButton: {
    backgroundColor: 'transparent',
    padding: 10,
    margin: 10,
    borderRadius: 10,
    width: 200,
    height: 200,
    alignItems: 'center',
    justifyContent: 'center',
  },
  icon: {
    width: 200,
    height: 200,
    resizeMode: 'contain',
  },
  buttonPular:{
    justifyContent:'flex-end',
    alignItems:'center',
    width:'100%',
    height:'100%',
    position:'absolute', 
    bottom:20
  },

});
