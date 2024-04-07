import { View, Text, Pressable, Image, } from 'react-native';
import styles from '../../../../Components/Styles/NotifConfig/notifConfigStyle';
import React, { useState, } from 'react';

export default function Sobre({ navigation }) {
  const [orgNotifActive,setOrgNotifActive] = useState(false);
  const [eventoNotifActive,setEventoNotifActive] = useState(false);
  const [sistNotifActive,setSistNotifActive] = useState(false);

  const setOrgNotif = async () => {
    if(orgNotifActive === true)
    {
      setOrgNotifActive(false)
    }
    else
    {
      setOrgNotifActive(true)
    }
  }
  const OrgNotif = () => {
    if(orgNotifActive === true)
    {
      return require('../../../../../assets/img/NotifConfig/btnDeactivate.png')
    }
    else
    {
      return require('../../../../../assets/img/NotifConfig/btnActivate.png')
    }
  }

  const setEventoNotif = async () => {
    if(eventoNotifActive === true)
    {
      setEventoNotifActive(false)
    }
    else
    {
      setEventoNotifActive(true)
    }
  }
  const EventoNotif = () => {
    if(eventoNotifActive === true)
    {
      return require('../../../../../assets/img/NotifConfig/btnDeactivate.png')
    }
    else
    {
      return require('../../../../../assets/img/NotifConfig/btnActivate.png')
    }
  }

  const setSistNotif = async () => {
    if(sistNotifActive === true)
    {
      setSistNotifActive(false)
    }
    else
    {
      setSistNotifActive(true)
    }
  }
  const SistNotif = () => {
    if(sistNotifActive === true)
    {
      return require('../../../../../assets/img/NotifConfig/btnDeactivate.png')
    }
    else
    {
      return require('../../../../../assets/img/NotifConfig/btnActivate.png')
    }
  }

  return (
      <View style={styles.container}>
        <View style={{ position: 'absolute', width: '100%', height: '100%'}}>
          <View style={{ justifyContent: 'flex-start' }}>
            <View style={{ position: 'absolute', alignSelf: 'flex-end' }}>
              <Image
                style={{ height: 50, width: 45 }}
                source={require('../../../../../assets/img/DadosPessoais/superiorDireito.png')}
              />
            </View>
            <View style={{ position: 'absolute', alignSelf: 'flex-end' }}>
              <Image
                style={{ height: 70, width: 28, marginTop: 120}}
                source={require('../../../../../assets/img/DadosPessoais/direito.png')}
              />
            </View>
          </View>
          <View style={{ justifyContent: 'flex-end', height: '100%' }}>
          <View style={{ position: 'absolute', alignSelf: 'flex-start' }}>
              <Image
                style={{ height: 155, width: 65, marginBottom: 100}}
                source={require('../../../../../assets/img/DadosPessoais/esquerdo.png')}
              />
            </View>
            <View style={{ position: 'absolute', alignSelf: 'flex-end'}}>
              <Image
                style={{ height: 150, width: 120,}}
                source={require('../../../../../assets/img/DadosPessoais/inferiorDireito.png')}
              />
            </View>
          </View>
        </View>
        
      <View style={{paddingHorizontal: 10}}>
        <View style={{ flexDirection: 'row', alignItems: 'center'}}>
          <Pressable onPress={() => navigation.navigate('Perfil')}>
            <Image
              style={{ height: 30, width: 30 }}
              source={require('../../../../../assets/img/Contato/back.png')}
            />
          </Pressable>
          <Text style={styles.titulo}>Notificações</Text>
        </View>
        <Text style={styles.texto}>Gerencie suas notificações dos perfis e do aplicativo Cola Aí, podendo ativa-las e desativa-las quando quiser.</Text>
      </View>
      <View style={styles.formulario}>
        <View style={styles.configRows}>
          <Text style={styles.textoConfig}>Notificações das organizações</Text>
          <Pressable onPress={() => setOrgNotif()}>
            <Image
              style={{ height: 41, width: 75 }}
              source={OrgNotif()}
            />
          </Pressable>
        </View>
        <View style={styles.configRows}>
          <Text style={styles.textoConfig}>Notificações de próximos eventos</Text>
          <Pressable onPress={() => setEventoNotif()}>
            <Image
              style={{ height: 41, width: 75 }}
              source={EventoNotif()}
            />
          </Pressable>
        </View>
        <View style={styles.configRows}>
          <Text style={styles.textoConfig}>Notificações do sistema</Text>
          <Pressable onPress={() => setSistNotif()}>
            <Image
              style={{ height: 41, width: 75 }}
              source={SistNotif()}
            />
          </Pressable>
        </View>
      </View>
    </View> 
  );
};